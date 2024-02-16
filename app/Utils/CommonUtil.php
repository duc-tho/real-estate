<?php

namespace App\Utils;

class CommonUtil
{
    public static function filterArrayItemByKeys(array $inputArray, array $allowKeys): array
    {
        return collect($inputArray)->only($allowKeys)->toArray();
    }
}