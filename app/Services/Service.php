<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Repository;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class Service
{
        /**
     * Validation Rule
     *
     * @var array
     */
    protected array $rules = [];

    protected array $messages  = [];

    public function __construct(private Repository $repository)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    	return $this->repository->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function isValidInput(array $data): MessageBag
    {
        $validator = Validator::make($data, $this->rules, $this->messages);

        $returns = new MessageBag();

        if ($validator->fails()) {
            $returns->add('status', false);
            $returns->add('data', $validator->errors()->toArray());

            return $returns;
        }

        $returns->add('status', true);
        $returns->add('data', $validator->validated());

        return $returns;
    }
}
