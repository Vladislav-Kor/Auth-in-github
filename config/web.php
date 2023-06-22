<?php

declare(strict_types=1);

$params = require __DIR__.'/params.php';
$db = require __DIR__.'/db.prod.php';
$url = require __DIR__.'/url.php';

$config = [

    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'github' => [
                'class' => 'yii\authclient\clients\GitHub',
                'clientId' => 'YOUR_APP_CLIENT_ID',
                'clientSecret' => 'YOUR_APP_CLIENT_SECRET',
            ],
        ],
    ],
];
