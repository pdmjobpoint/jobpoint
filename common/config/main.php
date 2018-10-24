<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'niksko12\user\Module',
            'generalApp' => true,        
            // 'enableUnconfirmedLogin' => true,
            'admins' => ['admin'],
            'mailer' => [
                'sender'                => 'pdm.jobpoint@gmail.com', // or ['no-reply@myhost.com' => 'Sender name']
                'welcomeSubject'        => 'Job Point',
                'confirmationSubject'   => 'Confirmation subject',
                'reconfirmationSubject' => 'Email change subject',
                'recoverySubject'       => 'Recovery subject',
            ],
        ],
        'auditlogs' => [
            'class' => 'niksko12\auditlogs\Module',
        ],
        'rbac' => [
            'class' => 'niksko12\rbac\Module',
        ],
        'file' => [
            'class' => 'file\FileModule',
            'webDir' => 'files',
            'tempPath' => '@common/uploads/temp',
            'storePath' => '@common/uploads/store',
            'rules' => [ // Правила для FileValidator
                'maxFiles' => 20,
                'maxSize' => 1024 * 1024 * 20 // 20 MB
            ],
        ],
       'dynagrid'=> [
            'class'=>'\kartik\dynagrid\Module',
            // other module settings
        ],
        'gridview'=> [
            'class'=>'\kartik\grid\Module',
            // other module settings
        ],
    ],
];
