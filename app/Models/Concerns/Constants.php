<?php

namespace App\Models\Concerns;


use Illuminate\Support\Str;

trait Constants
{
    /**
     * @param string $start
     * @return array
     */
    public static function getConstantsBeginWith($start = '')
    {
        $className = static::class;

        $reflection = rescue(function () use ($className) {
            return new \ReflectionClass($className);
        });

        return collect($reflection->getConstants())
            ->filter(function ($item, $key) use ($start) {
                return Str::startsWith($key, $start);
            })
            ->values()
            ->toArray();
    }

    /**
     * @param array $constants
     * @param string $translationKey
     * @return array
     */
    public static function getTranslatedConstantList(array $constants, $translationKey)
    {
        return collect($constants)->mapWithKeys(function ($item) use ($translationKey) {
            return [$item => __($translationKey.'.'.$item)];
        })->toArray();
    }
}