<?php

if (!function_exists('beginMonth')) {
    /**
     * 本月的开始日期
     * @param bool $His 是否展示时分秒 默认true
     * @return false|string
     */
    function beginMonth(bool $His = true)
    {
        $timestamp = mktime(0, 0, 0, date('m'), 1, date('Y'));
        return $His ? date('Y-m-d H:i:s', $timestamp) : $timestamp;
    }
}


if (!function_exists('database_path')) {
    /**
     * 获取项目根路径地址
     * @param string $path
     * @return string
     */
    function database_path(string $path = ''): string
    {
        return dirname(dirname(__DIR__) . DIRECTORY_SEPARATOR, 4) . DIRECTORY_SEPARATOR . $path;
    }
}