<?php

namespace Simonroberts881\ASamplePackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Simonroberts881\ASamplePackage\Skeleton\SkeletonClass
 */
class ASamplePackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'a-sample-package';
    }
}
