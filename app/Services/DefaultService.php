<?php

namespace App\Services;

class DefaultService
{
    public static function serveMe(string $echo): string
    {
        return $echo;
    }
}