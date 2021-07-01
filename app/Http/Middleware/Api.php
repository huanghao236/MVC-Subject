<?php
namespace App\Http\Middleware;

use Hao\Request;
use Closure;

class Api
{
    public function handle(Request $request,Closure $next){

        $request->api = 123;

        return $next($request);
    }
}