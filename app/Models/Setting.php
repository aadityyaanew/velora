<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    public const CACHE_KEY = 'site_settings_cache';

    /**
     * Get a setting by key, or return the default.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        $settings = static::getAllSettings();

        return array_key_exists($key, $settings) ? $settings[$key] : $default;
    }

    /**
     * Set a setting value.
     */
    public static function set(string $key, mixed $value, ?string $group = null): self
    {
        $attributes = ['key' => $key];
        $values = ['value' => $value];

        if ($group !== null) {
            $values['group'] = $group;
        }

        $setting = static::updateOrCreate($attributes, $values);

        static::clearCache();

        return $setting;
    }

    /**
     * Retrieve all settings as key => value associative array with caching.
     */
    public static function getAllSettings(): array
    {
        return Cache::rememberForever(self::CACHE_KEY, function () {
            return static::query()->pluck('value', 'key')->toArray();
        });
    }

    /**
     * Clear the cached settings.
     */
    public static function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
