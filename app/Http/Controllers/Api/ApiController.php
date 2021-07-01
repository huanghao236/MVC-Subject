<?php
namespace App\Http\Controllers\Api;

use Hao\Request;

class ApiController
{
    public $middleware = [
        'web' => ['except' => ['']],
        'api' => ['only' => ['api']]
    ];

    public function api(Request $request){

        return 'hello word';
    }
}