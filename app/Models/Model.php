<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class Model extends EloquentModel
{
    use HasUuids;
    use SoftDeletes;

    /**
     * Validation Rule
     *
     * @var array
     */
    protected array $rules = [];

    protected array $messages  = [];

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
