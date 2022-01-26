<?php
return [
    'prefix'            => 'api',
    'middleware'        => ['web'],
    'middleware-except' => [
        // 授权验证白名单
        'MobileCheckToken' => [
            'mobile/auth/getOauthUrl'
        ],
    ]
];