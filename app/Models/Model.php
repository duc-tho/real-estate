<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends EloquentModel
{
    use HasUuids;
    use SoftDeletes;

    private array $defaultGuareded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected array $customGuareded = [];

    public function __construct()
    {
        parent::__construct();

        $this->guarded = array_merge($this->defaultGuareded, $this->customGuareded);
    }
}
