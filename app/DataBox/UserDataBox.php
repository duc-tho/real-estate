<?php

namespace App\DataBox;

class UserDataBox extends DataBox
{
    const ATTRIBUTE_RULE_MAPPING = [
        'email' => 'required',
        'pass' => 'min:8'
    ];
}