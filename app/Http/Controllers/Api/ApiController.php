<?php
namespace App\Http\Controllers\Api;

use App\Http\Models\Channel;
use App\Http\Models\Good;
use Hao\Request;

class ApiController
{
    //中间件配置：except黑名单,only白名单
    public $middleware = [
        'web' => ['except' => [''],'only' => ['api']]
    ];

    public function api(Request $request){
        dd('success');
        //$model = Channel::selectRaw('id,name')->first();
        /*$model = Channel::first();
        $model->name = 'asdasdasdsad';
        dd($model->save());
        $model = Channel::where('test_id',2)->delete();
        dd($model);*/
    }
}