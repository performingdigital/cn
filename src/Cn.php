<?php

namespace Performing\Cn;

use TailwindMerge\TailwindMerge;

class Cn
{
    public static function merge(...$inputs)
    {
        $inputs = array_map(function ($input) {
            if (is_array($input)) {
                return implode(' ', array_keys(array_filter($input)));
            } elseif (is_string($input)) {
                return trim($input);
            }
        }, $inputs);

        return TailwindMerge::instance()->merge(...$inputs);
    }
}
