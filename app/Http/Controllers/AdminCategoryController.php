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
               'page' => 'category.detail',
               'page_title' => 'Sửa Danh Mục',
               'data' => [
                    'category_list' => $categoryList,
                    'category_info' => $categoryData
               ]
          ]);
     }

     public function putEdit()
     {
          return 'put edit';
     }

     public function delete()
     {
          return "Delete Category";
     }
}