<?php
use Hao\facade\Route;

/*Route::get('index','WebController@index');
Route::get('dd/bb','WebController@index');
Route::post('dd/bb','WebController@index');*/

/*Route::group('api',function(){
    Route::group('groupRoute',function(){
        Route::get('getApi','Api\ApiController@api');
        Route::post('postApi','Api\ApiController@api');
    });
});*/

/*Route::group('web',function(){
    Route::post('getApi','Api\ApiController@api');
});
Route::get('/','Api\ApiController@api');*/

Route::get('getApi','Api\ApiController@api');
