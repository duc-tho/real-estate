<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDistrictController extends Controller
{
    public function index()
    {
        return 'district';
        
    }

    public function getAdd()
    {
        return 'getAdddistrict';

    }

    public function postAdd(){
        return 'postAdddistrict';
    }

    public function getEdit(){
 
        return 'getEditdistrict';

    }

    public function putEdit(){
        return 'putEditdistrict';

    }

    public function delete(){
        return 'deletedistrict';
    }
}
