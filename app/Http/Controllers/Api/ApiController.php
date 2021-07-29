<?php
namespace App\Http\Controllers\Api;

use App\Http\Models\Channel;
use Hao\Request;

class ApiController
{
    public $middleware = [
        'web' => ['except' => ['']],
        'api' => ['only' => ['api']]
    ];

    public function api(Request $request){

        $test = Channel::first();
        $test->name = 454878;
        dd($test);
        return 'hello word';
    }
}