<?php

namespace App\Trait;
use App\Events\ModelCreated;
use App\Events\ModelUpdated;
use App\Models\Model;

trait ModelActivityLogable
{
    /**
     * Should we save change log of record when it created or updated
     *
     * @var boolean
     */
    protected bool $enableActivityLog = false;

    /**
     * Init model trait
     *
     * @return void
     */
    public function initializeModelActivityLogable()
    {
        $this->enableActivityLog = true;

        if ($this instanceof Model && $this->enableActivityLog) {
            $this->dispatchesEvents = array_merge($this->dispatchesEvents, [
                'created' => ModelCreated::class,
                'updated' => ModelUpdated::class,
            ]);
        }
    }
}