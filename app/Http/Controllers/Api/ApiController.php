<?php
namespace App\Http\Controllers\Api;

use App\Http\Models\Channel;
use App\Http\Models\Good;
use Hao\Request;

class ApiController
{
    public $middleware = [
        'web' => ['except' => ['']],
        'api' => ['only' => ['api']]
    ];

    public function api(Request $request){

        $test = Channel::selectRaw('id,name')->with(['goods' => function($query){
            $query->selectRaw('id,goods_name,goods_aumont');
        },'names' => function($query){
            $query->selectRaw('id,goods_name');
        }])->get();
        dd($test);
    }
}