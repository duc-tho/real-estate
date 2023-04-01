<?php

namespace App\Core\Utils;

class StringUtils
{
    public static function unique_code($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

}
