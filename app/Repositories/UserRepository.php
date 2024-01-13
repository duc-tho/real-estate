<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository implements UserRepositoryInterface
{
    protected $model = User::class;
}
