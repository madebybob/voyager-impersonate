<?php

namespace MadeByBob\VoyagerImpersonate;

use Illuminate\Support\Facades\Facade;

class VoyagerImpersonateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'voyager-impersonate';
    }
}