<?php

namespace Haxem\Test;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Haxem\Test\Skeleton\SkeletonClass
 */
class TestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}
