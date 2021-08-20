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
        //$model = Channel::selectRaw('id,name')->first();
        $model = Channel::insert(['name' => 123]);
        dd($model);
        $model = Channel::where('test_id',2)->delete();
        dd($model);
    }
}