<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCityController extends Controller
{
    public function index()
    {
        return "Admin City";
    }

    public function postAdd()
    {
        return "Post Add City";
    }

    public function getEdit()
    {
        return "Get Edit City";
    }

    public function putEdit()
    {
        return "Put Edit City";
    }

    public function delete()
    {
        return "Delete City";
    }
}