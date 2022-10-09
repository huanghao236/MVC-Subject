<?php

namespace App\Http\Controllers\Api;

use App\Http\Models\User;
use Hao\Request;

class WebController
{

    public function index(Request $request){
        xhprofStart();
        $userModel = User::first();
        xhprofEnd();
        dd($userModel);
    }
}
