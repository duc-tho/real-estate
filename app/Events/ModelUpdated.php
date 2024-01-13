<?php

namespace App\Events;

use App\Models\ChangeLog;
use App\Models\Model;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ModelUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(Model $modelInstance)
    {
        $oldData = $modelInstance->getRawOriginal();
        $newData = $modelInstance->getAttributes();
        $ignoreKeys = $modelInstance->getHidden();

        $changedKeys = array_keys(array_diff($oldData, $newData));

        $changes = [
            'type' => 'updated',
            'table' => $modelInstance->getTable(),
            'old' => array_filter($oldData, fn($key) => in_array($key, $changedKeys) && !in_array($key, $ignoreKeys), ARRAY_FILTER_USE_KEY),
            'new' => array_filter($newData, fn($key) => in_array($key, $changedKeys) && !in_array($key, $ignoreKeys), ARRAY_FILTER_USE_KEY)
        ];

        $logRecord = new ChangeLog();
        $logRecord->record_id = $modelInstance->id;
        $logRecord->data = json_encode($changes);
        $logRecord->saveOrFail();
    }
}
