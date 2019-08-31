<?php


use Carbon\Carbon;
use Illuminate\Support\Fluent;

/**
 * @param mixed $value
 * @param string|null $tz
 * @return Carbon
 */
function date_to_carbon($value, $tz = null)
{
    if ($value instanceof Carbon) {
        return clone $value;
    }

    if ($value instanceof DateTimeInterface) {
        return new Carbon(
            $value->format('Y-m-d H:i:s.u'), $value->getTimezone()
        );
    }

    if (is_numeric($value)) {
        return Carbon::createFromTimestamp($value, $tz);
    }

    return Carbon::parse($value, $tz);
}

/**
 * @param Carbon|null $date
 * @return array|null
 */
function date_bundle(?Carbon $date)
{
    return is_null($date) ? null : [
        'date' => $date->format('n-j-y'),
        'time' => $date->format('g:ia T'),
        'iso' => $date->toIso8601String(),
        'timestamp' => $date->getTimestamp(),
    ];
}

/**
 * Get the specified script configuration value.
 *
 * @param  string $key
 * @param  mixed $default
 * @return mixed|Fluent
 */
function script_config($key = null, $default = null)
{
    if (is_null($key)) {
        return app('admin.script.config');
    }

    return data_get(app('admin.script.config'), $key, $default);
}
