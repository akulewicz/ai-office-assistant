<?php

declare(strict_types=1);

namespace Framework;

class Validator
{
    public static function string(string $value, int $min = 1, float $max = INF) : bool 
    {
        if (is_string($value)) {
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }

        return false;
    }

    public static function url(string $value) : mixed
    {
        $url = trim($value);
        return filter_var($url, FILTER_VALIDATE_URL);
    }
}