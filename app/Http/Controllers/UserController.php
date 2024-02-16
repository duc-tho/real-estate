<?php

namespace App\Http\Controllers;

use App\DataBox\UserDataBox;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function index(Request $request, UserDataBox $userDataBox): JsonResponse
    {
        $userDataBox->fromRequest($request);

        $userDataBox->validate();

        return new JsonResponse($userDataBox->getError());
    }
}
