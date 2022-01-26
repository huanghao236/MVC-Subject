<?php
use Hao\facade\Route;


Route::post('getApi','Api\ApiController@api');
Route::get('/','Api\ApiController@api');