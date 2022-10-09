<?php

/**
 * 数据库、noSql配置文件
 */
return [

    //所选连接的数据库类型
    'default' => env('DB_CONNECTION','mysql'),

    'connections' => [
        'mysql' => [
            // 数据库类型
            'type'            => env('TYPE', 'mysql'),
            // 服务器地址
            'hostname'        => env('HOSTNAME', '127.0.0.1'),
            // 数据库名
            'database'        => env('DATABASE', 'mvc-subject'),
            // 用户名
            'username'        => env('USERNAME', 'root'),
            // 密码
            'password'        => env('PASSWORD', 'root'),
            // 端口
            'hostport'        => env('HOSTPORT', '3306'),
            // 数据库连接参数
            'params'          => [],
            // 数据库编码默认采用utf8
            'charset'         => 'utf8',
            'collation'       => 'utf8_unicode_ci',
            // 数据库表前缀
            'prefix'          => env('prefix', ''),
            // 是否严格检查字段是否存在
            'fields_strict'   => true,
            // 是否需要断线重连
            'break_reconnect' => false,
            // 开启字段缓存
            'fields_cache'    => false,
        ],
    ]
];