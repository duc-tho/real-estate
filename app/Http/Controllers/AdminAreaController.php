<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAreaController extends Controller
{
    public function index()
    {
        return 'area';
        
    }

    public function getAdd()
    {
        return 'getAddarea';

    }

    public function postAdd(){
        return 'postAddarea';
    }

    public function getEdit(){
 
        return 'getEditarea';

    }

    public function putEdit(){
        return 'putEditarea';

    }

    public function delete(){
        return 'deletearea';
    }
}
