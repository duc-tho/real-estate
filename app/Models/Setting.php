<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $table = 'setting';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['key', 'value'];

    static function getValue($key)
    {
        $cacheKey = "setting-{$key}";
        $cacheValue = Cache::has($cacheKey);

        if (!$cacheValue) {
            $setting = Setting::where(['key' => $key])->first();

            if (!isset($setting)) {
                return null;
            }

            Cache::put($cacheKey, $setting->value);
            return $setting->value;
        }

        return Cache::get($cacheKey);
    }
}
