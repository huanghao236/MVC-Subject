<?php
namespace App\Http;

use Hao\http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * 全局中间件
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\Api::class
    ];


    /**
     * 路由中间件
     * @var array
     */
    protected $routeMiddleware = [
        'web' => \App\Http\Middleware\Web::class
    ];
}