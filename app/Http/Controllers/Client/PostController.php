<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Post;
use App\Models\Project;
use App\Models\Street;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $req, $type, $category_slug = null, $city_slug = null, $district_slug = null, $area_slug = null, $post_slug = null)
    {
        $typeCategory = $this->categoryRepository->getBySlug($type);

        // if (null === $typeCategory) {
        //     abort(404);
        // }

        // $categories = $this->categoryRepository->getBySlug($category_slug, $typeCategory->CategoryId);

        // if ($category_slug !== 'bat-dong-san') {
        //     $category = Category::where([
        //         'ParentId' => $category_type->CategoryId,
        //         'Slug' => $category_slug
        //     ])->first();
        // }

        // if ($category === null)
        //     return redirect()->route('post', [$type, 'bat-dong-san', 'thanh-pho-ho-chi-minh']);

        // if ($req->filled('min_price'))
        //     array_push($condition, ['Price', '>=', $req->query('min_price')]);
        // if ($req->filled('max_price'))
        //     array_push($condition, ['Price', '<=', $req->query('max_price')]);

        // if ($req->filled('min_acreage'))
        //     array_push($condition, [DB::raw('(Width * Length)'), '>=', $req->query('min_acreage')]);
        // if ($req->filled('max_acreage'))
        //     array_push($condition, [DB::raw('(Width * Length)'), '<=', $req->query('max_acreage')]);
        // if ($req->filled('tu-khoa'))
        //     array_push($condition, ['Title', 'LIKE', '%' . $req->query('tu-khoa') . '%']);

        // if ($city_slug === null) {
        //     return redirect()->route('post', [$type, $category_slug, 'thanh-pho-ho-chi-minh']);
        // } else {
        //     $city = City::where('Slug', $city_slug)->first();
        //     if ($city === null)
        //         abort(404);

        //     if ($district_slug === null)
        //         return $this->postList($req, $category_type->Slug, $category['Slug'], $city->Slug, null, null, $condition);
        //     else {

        //         $district = District::where('Slug', $district_slug)->first();
        //         if ($district === null)
        //             abort(404);

        //         if ($area_slug === null)
        //             return $this->postList($req, $category_type->Slug, $category['Slug'], $city->Slug, $district_slug, null, $condition);
        //         else {

        //             $area = Ward::where('Slug', $area_slug)->first();
        //             if ($area === null)
        //                 abort(404);

        //             if ($post_slug === null)
        //                 return $this->postList($req, $category_type->Slug, $category['Slug'], $city->Slug, $district_slug, $area_slug, $condition);
        //             else
        //                 return $this->postDetail($city_slug, $post_slug, $category_type->Slug);
        //         }
        //     }
        // }
        // ;

        // $category = Category::find($req->category_id);
        // $city = City::find($req->city_id);
    }

    public function postList(Request $req, $type, $category_slug, $city_slug, $district_slug, $area_slug, $condition = null)
    {
        $category_type = Category::where(['Slug' => $type, 'ParentId' => 0])->first();
        $category = ['Slug' => 'bat-dong-san'];

        if ($category_slug !== 'bat-dong-san') {
            $category = Category::where([
                'ParentId' => $category_type->CategoryId,
                'Slug' => $category_slug
            ])->first();
        }

        $post_list = City::join('district', 'city.CityId', '=', 'district.CityId')
            ->join('area', 'district.DistrictId', '=', 'area.DistrictId')
            ->join('street', 'street.AreaId', '=', 'area.AreaId')
            ->join('post', 'post.StreetId', '=', 'street.StreetId')
            ->join('category', 'category.CategoryId', '=', 'post.CategoryId')
            ->where([
                ['category.ParentId', $category_type->CategoryId],
                $category_slug !== 'bat-dong-san' ? ['category.Slug', $category['Slug']] : [DB::raw('null')]
            ])
            ->where(['post.Status' => '1'])
            ->where('city.Slug', $city_slug)
            ->where([$district_slug !== null ? ['district.Slug', $district_slug] : [DB::raw('null')]])
            ->where($category_slug !== null ? $condition : [DB::raw('null')])
            ->select('city.Name as CityName', 'post.*', 'district.Name as DistrictName', 'area.Name as AreaName', 'street.Name as StreetName')
            ->get();

        $city = City::where('city.Slug', $city_slug)->first();
        $district = $district_slug !== null ? District::where('district.Slug', $district_slug)->first() : null;
        $area = $area_slug !== null ? Ward::where('area.Slug', $area_slug)->first() : null;

        return view('index.index', [
            'title' => 'Danh sách bất động sản tại ' . $city->Name,
            'page' => 'post.index',
            'content_title' => 'Bất động sản đang ' . mb_strtolower($category_type->Name),
            'location' => $city->Name . ($district !== null ? ', ' . $district->Name : '') . ($area !== null ? ', ' . $area->Name : ''),
            'data' => [
                'post_list' => $post_list
            ]
        ]);
    }

    public function postDetail($city_slug, $slug, $type)
    {
        $postDetail = Post::where('Slug', $slug)->first();

        if ($postDetail === null)
            abort(404);

        $postDetail->ViewCount = $postDetail->ViewCount + 1;
        $postDetail->Save();

        if ($postDetail->ProjectId !== null) {
            $postDetail->Project = Project::find($postDetail->ProjectId);
            $postDetail->Street = Street::find($postDetail->Project->StreetId);
        } else {
            $postDetail->Street = Street::find($postDetail->StreetId);
        }

        $postDetail->Ward = Street::find($postDetail->Street->StreetId)->Ward;
        $postDetail->District = Ward::find($postDetail->Ward->AreaId)->District;
        $postDetail->City = District::find($postDetail->District->DistrictId)->City;

        $district_list = [];

        $postDetail->post_list = Post::where([
            'Type' => $postDetail->Type,
            'ProjectId' => $postDetail->ProjectId,
            ['PostId', '!=', $postDetail->PostId]
        ])->paginate(3);


        $default_city = City::where('Slug', $city_slug)->first();

        $district_list = $default_city->District;

        foreach ($district_list as $district) {
            $district->CitySlug = $default_city->Slug;
        }

        return view('index.index', [
            'title' => 'Chi tiết bất động sản',
            'page' => 'post.detail',
            'pageInfo' => [
                'type' => $type
            ],
            'data' => [
                'post_detail' => $postDetail,
                'district_list' => $district_list
            ]
        ]);
    }
}
