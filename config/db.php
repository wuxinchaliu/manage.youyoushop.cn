<?php

return [
    'class' => 'yii\db\Connection',

    //配置主服务器
    'masterConfig' => [
        'username' => 'root',
        'password' => 'root@123',
        'attributes' => [
            PDO::ATTR_TIMEOUT => 100,
        ]
    ],
    'masters' => [
        ['dsn' => 'mysql:host=localhost;port=3306;dbname=yyshop;charset=utf8'],
    ],

    //配置从服务器
    'slaveConfig' => [
        'username' => 'root',
        'password' => 'root@123',
        'attributes' => [
            PDO::ATTR_TIMEOUT => 100,
        ],
    ],
    'slaves' => [
        ['dsn' => 'mysql:host=localhost;port=3306;dbname=yyshop;charset=utf8'],
    ],
    'enableSlaves' => true,
    'tablePrefix' => 'yy_',
    'queryCacheDuration' => '0',
];