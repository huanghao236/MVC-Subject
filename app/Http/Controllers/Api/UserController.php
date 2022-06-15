<?php

namespace App\Http\Controllers\Api;


use App\Http\Models\User;
use Hao\Request;

class UserController
{
    /**
     * 新增
     * @param Request $request
     * @return string
     */
    public function add(Request $request): string
    {
        $userModel = User::where('username', $request->username)->first();
        if ($userModel->toArray()) {
            return "重复用户名";
        }
        $userModel           = new User();
        $userModel->username = $request->username;
        $userModel->password = md5($request->password);
        $insert              = $userModel->save();
        if ($insert) {
            return "新增成功，主键ID：" . $insert;
        }
        return "新增失败！";
    }

    /**
     * 删除
     * @param Request $request
     * @return string
     */
    public function delete(Request $request): string
    {
        $userModel = User::where('username', $request->username)
                         ->where('password', md5($request->password))
                         ->first();
        if (!$userModel->toArray()) {
            return "数据不存在";
        }
        if ($userModel->delete()) {
            return "删除成功";
        }
        return "删除失败";
    }

    /**
     * 修改密码
     * @param Request $request
     * @return string
     */
    public function update(Request $request): string
    {
        $userModel = User::where('username', $request->username)
                         ->where('password', md5($request->old_password))
                         ->first();
        if (!$userModel->toArray()) {
            return "数据不存在";
        }
        $userModel->password = md5($request->password);
        if ($userModel->save()) {
            return "修改成功";
        }
        return "修改失败！";
    }

    /**
     * 查询
     * @param Request $request
     * @return string
     */
    public function get(Request $request): string
    {
        $userModel = User::where('username', $request->username)
                         ->where('password', md5($request->password))
                         ->first();
        if (!$userModel->toArray()) {
            return "数据不存在";
        }
        return json_encode($userModel->toArray());
    }
}