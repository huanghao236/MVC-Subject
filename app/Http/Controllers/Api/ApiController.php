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

        $test = Channel::where('id',1)->where('name','这是name')->select('a','b','c')->toSql();
        dd($test);
        return 'hello word';
    }
}