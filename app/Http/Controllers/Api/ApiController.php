<?php
namespace App\Http\Controllers\Api;

use App\Http\Models\Channel;
use App\Http\Models\Good;
use Hao\Request;

class ApiController
{

    public function api(Request $request): string
    {
        return '这是api接口地址';
        //$model = Channel::selectRaw('id,name')->first();
        /*$model = Channel::first();
        $model->name = 'asdasdasdsad';
        dd($model->save());
        $model = Channel::where('test_id',2)->delete();
        dd($model);*/
    }
}