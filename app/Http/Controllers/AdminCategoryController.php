<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category');
    }

    public function postAdd()
    {
        return "Post Add Category";
    }

    public function getEdit()
    {
        return "Get Edit Category";
    }

    public function putEdit()
    {
        return "Put Edit Category";
    }

    public function delete()
    {
        return "Delete Category";
    }
}