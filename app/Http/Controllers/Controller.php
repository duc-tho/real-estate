<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    // protected function index(Request $request, UserDataBox $userDataBox): JsonResponse
    // {
    //     return new JsonResponse($this->service->list());
    // }



    // /**
    //  * Store a newly created resource in storage.
    //  */
    // protected function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // protected function show(User $user)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // protected function update(Request $request, User $user)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // protected function destroy(User $user)
    // {
    //     //
    // }
}
