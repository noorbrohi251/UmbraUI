<?php

namespace Ihxnnxs\UmbraUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ihxnnxs\UmbraUI\UmbraUI
 */
class UmbraUI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ihxnnxs\UmbraUI\UmbraUI::class;
    }
}
