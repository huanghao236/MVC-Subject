<?php
use Hao\facade\Route;


Route::group('user',function (){
    Route::post('add','Api\UserController@add');
    Route::post('delete','Api\UserController@delete');
    Route::post('update','Api\UserController@update');
    Route::get('get','Api\UserController@get');
});