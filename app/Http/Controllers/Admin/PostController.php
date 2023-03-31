<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Project;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostAddRequest;
use App\Http\Requests\PostEditRequest;
use App\Models\Ward;
use App\Services\Admin\PostService;

class PostController extends Controller
{
     private PostService $postService;

     public function __construct(PostService $postService) {
          $this->postService = $postService;
     }

     public function index()
     {
          $data = $this->postService->getAll();

          return view('admin.admin', $data);
     }

     public function create()
     {
          $projectList = Project::all();
          $cityList = City::all();
          $categoryList = Category::where('ParentId', 0)->get();

          foreach ($categoryList as $item) $item->child = Category::where('ParentId', $item->CategoryId)->get();

          return view('admin.admin', [
               'title' => 'Thêm Bất Động Sản',
               'page' => 'post.detail',
               'page_title' => 'Thêm Bất Động Sản',
               'data' => [
                    'project_list' => $projectList,
                    'city_list' => $cityList,
                    'category_list' => $categoryList
               ]
          ]);
     }

     public function store(PostAddRequest $req)
     {
          if (!$req->filled(
               [
                    'Title', 'Slug',
                    'CategoryId', 'Floor',
                    'Price', 'Status', 'Slug'
               ]
          )) {
               return redirect()->route('adminPostGetAdd')->withInput();
          }

          $image = [];
          $imgObjStr = '';
          $imgObj = [
               [
                    "id" => "all",
                    "name" => "Tất cả ảnh",
                    "imgList" => []
               ]
          ];


          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $file_url = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($image, $file_url);
               }

               $imgObj[0]['imgList'] = $image;
          }

          if (($req->ProjectId ?? 0) === 0) $req->merge(['ProjectId' => null]);
          else {
               $pj = Project::find($req->ProjectId);
               $req->merge(['StreetId' => $pj['StreetId']]);
          }

          $post = new Post($req->input());
          $post->UserId = Auth::user()->UserId;

          $imgObjStr = json_encode($imgObj);
          $post->Image = $imgObjStr;

          $req_category = Category::find($req->CategoryId);
          $post->Type = Category::where(['CategoryId' => $req_category->ParentId], ['ParentId' => 0])->first()->Name;

          $post->save();

          return redirect()->route("adminPost");
     }

     public function edit($id)
     {
          $postData = Post::find($id);

          if ($postData === null) return abort(404);

          $postData->AreaId = Street::find($postData['StreetId'])->Area['AreaId'];
          $postData->DistrictId = Ward::find($postData['AreaId'])->District['DistrictId'];
          $postData->CityId = District::find($postData['DistrictId'])->City['CityId'];
          $projectList = Project::all();
          $categoryList = Category::where('ParentId', 0)->get();
          $cityList = City::all();
          $districtList = City::find($postData->CityId)->District;
          $areaList = District::find($postData->DistrictId)->Area;
          $streetList = Ward::find($postData->AreaId)->Street;


          foreach ($categoryList as $item) $item->child = Category::where('ParentId', $item->CategoryId)->get();

          return view('admin.admin', [
               'title' => 'Sửa Bất Động Sản',
               'page' => 'post.detail',
               'page_title' => 'Sửa Bất Động Sản',
               'data' => [
                    'post_info' => $postData,
                    'project_list' => $projectList,
                    'city_list' => $cityList,
                    'category_list' => $categoryList,
                    'district_list' => $districtList,
                    'area_list' => $areaList,
                    'street_list' => $streetList
               ]
          ]);
     }

     public function update(PostEditRequest $req, $id)
     {
          if (!$req->filled(
               [
                    'Title', 'Slug',
                    'CategoryId', 'Floor',
                    'Price', 'Status', 'Slug'
               ]
          )) {
               return redirect()->route('adminPostGetEdit', [$id])->withInput();
          }

          $post = Post::find($id);


          //Code Up Ảnh
          $imgObjStr = '';
          $imgObj = json_decode($post->Image, true);

          if ($req->hasFile('Image')) {
               foreach ($req->Image as $file) {
                    $file_url = $file->store('/dist/img/upload/project', ['disk' => 'public_file']);
                    array_push($imgObj[0]['imgList'], $file_url);
               }
          }
          $imgObjStr = json_encode($imgObj);

          $req->merge(['Image' => $imgObjStr]);


          if (($req->ProjectId ?? 0) === 0) $req->merge(['ProjectId' => null]);
          else {
               $pj = Project::find($req->ProjectId);
               $req->merge(['StreetId' => $pj['StreetId']]);
          }

          $req_category = Category::find($req->CategoryId);
          $type = Category::where(['CategoryId' => $req_category->ParentId], ['ParentId' => 0])->first();
          $req->merge(['Type' => $type->Name]);

          $post->update($req->input());

          return redirect()->back();
     }

     public function destroy($id)
     {
          Post::destroy($id);
          return redirect()->route("adminPost");
     }
}
