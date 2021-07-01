<?php
namespace App\Http\Controllers;

use Hao\Request;

class IndexController
{
    public function index(Request $request){

        return 'hello word!';
    }
}