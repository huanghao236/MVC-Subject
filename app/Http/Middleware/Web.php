<?php
namespace App\Http\Middleware;

use Hao\Request;
use Closure;

class Web
{
    public function handle(Request $request,Closure $next){

        $request->web = 456;

        return $next($request);
    }
}