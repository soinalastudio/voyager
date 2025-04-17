<?php

namespace SoinalaStudio\Voyager\Facades;

use Illuminate\Support\Facades\Facade;

class Voyager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @method static string image($file, $default = '')
     * @method static $this useModel($name, $object)
     *
     * @see \SoinalaStudio\Voyager\Voyager
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'voyager';
    }
}
