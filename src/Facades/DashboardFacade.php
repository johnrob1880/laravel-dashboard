<?php

namespace Johnrob1880\Dashboard\Facades;

use Illuminate\Support\Facades\Facade;

class Dashboard extends Facade
{
    protected static function getFacadeAccessor() { return 'dashboard'; }
}