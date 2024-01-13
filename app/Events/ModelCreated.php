<?php

namespace App\Events;

use App\Models\ChangeLog;
use App\Models\Model;
use Illuminate\Queue\SerializesModels;

class ModelCreated
{
    use SerializesModels;

    public function __construct(Model $modelInstance)
    {
        $newRecorddata = $modelInstance->getAttributes();
        $ignoreKeys = $modelInstance->getHidden();


        $logDatas = [
            'type' => 'created',
            'table' => $modelInstance->getTable(),
            'value' => array_filter($newRecorddata, fn($key) => !in_array($key, $ignoreKeys), ARRAY_FILTER_USE_KEY)
        ];

        $logRecord = new ChangeLog();
        $logRecord->record_id = $modelInstance->id;
        $logRecord->data = json_encode($logDatas);
        $logRecord->saveOrFail();
    }
}
