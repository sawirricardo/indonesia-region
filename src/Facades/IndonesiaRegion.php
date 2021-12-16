<?php

namespace Sawirricardo\IndonesiaRegion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\IndonesiaRegion\IndonesiaRegion
 */
class IndonesiaRegion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'indonesia-region';
    }
}
