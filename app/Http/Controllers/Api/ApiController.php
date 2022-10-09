<?php

namespace App\Http\Controllers\Api;

use App\Http\Models\Channel;
use App\Http\Models\Good;
use Hao\facade\Validator;
use Hao\Request;

class ApiController
{

    public function api(Request $request): string
    {
        $validator = Validator::make($request->all(), [
            'id'        => 'required|integer',
            'array'     => 'required|array',
            'array.*'   => 'required|array',
            'array.*.*' => 'required|integer',
        ]);
        $validator->setAttributeNames([
            'id'    => '单元ID',
            'array' => '数组参数'
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        return '这是api接口地址';
        //$model = Channel::selectRaw('id,name')->first();
        /*$model = Channel::first();
        $model->name = 'asdasdasdsad';
        dd($model->save());
        $model = Channel::where('test_id',2)->delete();
        dd($model);*/
    }
}