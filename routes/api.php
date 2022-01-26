<?php
use Hao\facade\Route;

/*Route::get('index','IndexController@index');
Route::get('dd/bb','IndexController@index');
Route::post('dd/bb','IndexController@index');*/

Route::group('api',function(){
    Route::group('groupRoute',function(){
        Route::get('getApi','Api\ApiController@api');
        Route::post('postApi','Api\ApiController@api');
    });
});

Route::group('web',function(){
    Route::post('getApi','Api\ApiController@api');
});

Route::post('getApi','Api\ApiController@api');
Route::get('/','Api\ApiController@api');