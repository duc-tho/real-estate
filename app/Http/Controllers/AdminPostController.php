<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        return "Admin Post";
    }

    public function postAdd()
    {
        return "Post Add Post";
    }

    public function getEdit()
    {
        return "Get Edit Post";
    }

    public function putEdit()
    {
        return "Put Edit Post";
    }

    public function delete()
    {
        return "Delete Post";
    }
}