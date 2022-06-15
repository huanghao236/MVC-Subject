<?php

namespace App\Providers;

use Hao\facade\Route;

class RouteServiceProvider
{
     protected $namespace = 'App\Http\Controllers';

    public function boot()
    {
        Route::prefix(config('setting.prefix'))
             ->middleware(config('setting.middleware'))
             ->namespace($this->namespace)
             ->routeQuote('routes/api.php');

        /*Route::prefix('getApi')
             ->middleware('web')
             ->namespace($this->namespace)
             ->routeQuote('routes/web.php');*/
    }
}
