<?php

namespace App\Http\Controllers\Api;

use Hao\Request;

class WebController
{
    public $middleware = [
        //'中间件名称' => ['except' => ['']],//不经过中间件的方法
        //'中间件名称' => ['only' => ['']]//除了哪些不经过中间件
    ];

    public function index(Request $request){
        dd('hello word');
    }
}
