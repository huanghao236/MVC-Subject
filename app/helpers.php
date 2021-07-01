<?php

if (!function_exists('beginMonth')) {
    /**
     * 本月的开始日期
     * @param bool $His 是否展示时分秒 默认true
     * @return false|string
     */
    function beginMonth($His = true)
    {
        $timestamp = mktime(0, 0, 0, date('m'), 1, date('Y'));
        return $His ? date('Y-m-d H:i:s', $timestamp) : $timestamp;
    }
}