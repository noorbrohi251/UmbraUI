<?php

namespace Ihxnnxs\UmbraUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void success(string $message, string $title = null)
 * @method static void error(string $message, string $title = null)
 * @method static void warning(string $message, string $title = null)
 * @method static void info(string $message, string $title = null)
 * @method static void message(string $message, string $type = 'default', string $title = null)
 */
class Toast extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'umbra-toast';
    }
}