<?php
namespace Hao;
ini_set("display_errors","On");
//composer自动加载
require '../vendor/autoload.php';
//初始化
$http = (new App())->http;
$response = $http->run();
$response->send();