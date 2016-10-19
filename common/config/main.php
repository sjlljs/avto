<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'php:d.m.Y',
            'datetimeFormat' => 'php:d.m.Y H:i',
            'timeFormat' => 'php:H:i:s',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            //'showScriptName' => false,
            'rules' => [
                //'<action:contacts>/<action>' => 'site/<action>',
                //'<controller:\w+>/<id:\d+>' => '<controller>/view',
                //'<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                //'<action:contacts>/<action>' => 'site/<action>',
                //'<action:\w+>' => 'site/<action>',
                /*'<_c:[\w]+>/<id:\d+>' => '<_c>/view',
                '<_c:[\w]+>/<_a:[\w]+>/<id:\d+>' => '<_c>/<_a>',
                '<_c:[\w]+>/<_a:[\w]+>' => '<_c>/<_a>',
                '<_c:[\w]+>' => '<_c>/index',*/
            ]
        ],
    ],
];
