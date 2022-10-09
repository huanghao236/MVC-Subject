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

if (!function_exists('xhprofStart')) {
    /**
     * xhprof性能测试工具开始
     */
    function xhprofStart()
    {
        xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
    }
}

if (!function_exists('xhprofEnd')) {
    /**
     * xhprof性能测试工具开始
     */
    function xhprofEnd()
    {
        $data = xhprof_disable();
        include_once "D:/phpstudy_pro/xhprof/xhprof_lib/utils/xhprof_lib.php";
        include_once "D:/phpstudy_pro/xhprof/xhprof_lib/utils/xhprof_runs.php";

        $objXhprofRun = new \XHProfRuns_Default();
        $run_id = $objXhprofRun->save_run($data, "xhprof");
        var_dump($run_id);
    }
}