<?php

return [
    'components' => [
        'urlManager' => [
            'rules' => [
                'admin/user' => 'user/admin/index',
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => $params['admins'],
            'controllerMap' => [
                'admin' => [
                    'class'  => 'dektrium\user\controllers\AdminController',
                    'layout' => '@vendor/noumo/easyii/views/layouts/main',
                ]
            ],
            'modelMap' => [
                'User' => 'developeruz\easyii_user\models\User',
            ],
        ],
        'admin' => [
            'controllerMap' => [
                'sign' => [ 'class'  => 'developeruz\easyii_user\controllers\SignController',
                            'layout' => '@vendor/noumo/easyii/views/layouts/empty'
                ],
            ],
        ]
    ]
];
