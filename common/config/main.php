<?php
return [
    'name' => 'Categories',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'user' => [
        //     'class' => 'amnah\yii2\user\components\User',
        //     'enableAutoLogin' => true,
        // ],
        'urlManager' => [
            'class'             => yii\web\UrlManager::className(),
            'enablePrettyUrl'   => true,
            'showScriptName'    => false, // false - means that index.php will not be part of the URLs
            // 'rules'=>[
            //     '<client-address>/<action:\w+>/<id:\w+>' => '<client-address>/<action>',
            // ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport'=>false,
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            // 'messageConfig' => [
            //     'from' => ['noreply@revo.com'  => 'Revo Admin'], // this is needed for sending emails
            //     'charset' => 'UTF-8',
            // ],
            // 'transport' => [
            //     'class' => 'Swift_SmtpTransport',
            //     'host' => 'smtp.gmail.com',
            //     'username' => 'elamathiram94@gmail.com',
            //     'password' => 'Sanjana2018',
            //     'port' => '465',
            //     'encryption' => 'ssl',
            // ],
        ],
        
        // 'mailer' => [
        //     'class' => 'yii\swiftmailer\Mailer',
        //     'useFileTransport' => false,
        //     // 'useFileTransport' => true,
        //     'messageConfig' => [
        //         'from' => ['noreply@revo.com'  => 'Revo Admin'], // this is needed for sending emails
        //         'charset' => 'UTF-8',
        //     ],
        //     'transport' => [
        //      'class' => 'Swift_SmtpTransport',
        //      'host' => 'smtp.gmail.com',
        //      'username' => 'elamathiram94@gmail.com',
        //      'password' => 'Sanjana2018',
        //      'port' => '587',
        //      'encryption' => 'tls',
        //      ],
        // ],
    ],
    // 'modules' => [
    //     'user' => [
    //         'class' => 'amnah\yii2\user\Module',
    //         // set custom module properties here ...
    //     ],
    // ],
    
];
