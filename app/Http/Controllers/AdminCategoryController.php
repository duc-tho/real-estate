<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
     public function index()
     {
          $categoryList = Category::all();

          return view('admin.admin', [
               'title' => 'Quản Lý Danh Mục',
               'page' => 'category.index',
               'page_title' => 'Quản Lý Danh Mục',
               'data' => [
                    'category_list' => $categoryList
               ]
          ]);
     }

     public function getAdd()
     {
          $categoryList = Category::all();

          return view('admin.admin', [
               'title' => 'Thêm Danh Mục',
               'page' => 'category.detail',
               'page_title' => 'Thêm Danh Mục',
               'data' => [
                    'category_list' => $categoryList
               ]
          ]);
     }

     public function postAdd(Request $req)
     {
          if (!$req->filled(['Name', 'Slug'])) {
               return redirect()->route('adminCategoryGetAdd')->withInput();
          }

          $news = new Category($req->input());
          $news->save();

          return redirect()->route("adminCategory");
     }

     public function getEdit($id)
     {
          $categoryData = Category::find($id);
          $categoryList = Category::all();

          return view('admin.admin', [
               'title' => 'Sửa Danh Mục',
               'page' => 'category.detail',
               'page_title' => 'Sửa Danh Mục',
               'data' => [
                    'category_list' => $categoryList,
                    'category_info' => $categoryData
               ]
          ]);
     }

     public function putEdit(Request $req, $id)
     {
          if (!$req->filled(['Name', 'Slug', 'ParentId'])) {
               return redirect()->route('adminCategoryGetEdit', ['id' => $id])->withInput()->with([
                    'err' => 'Sửa thông tin thất bại! Vui lòng điền đầy đủ thông tin'
               ]);
          }

          $categorys = Category::find($id);
          $categorys->Name = $req->input('Name');
          $categorys->Slug = $req->input('Slug');
          $categorys->ParentId = $req->input('ParentId');
          $categorys->save();

          return redirect()->route("adminCategory");
     }

     public function delete($id)
     {
          Category::destroy($id);
          return redirect()->route("adminCategory");
     }
}