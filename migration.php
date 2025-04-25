<?php

use divyashrestha\Mvc\Application;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/config.php';

extract($config);

$app_config = [
    'db' => [
        'dsn'               => "mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME",
        'user'              => $DB_USER,
        'password'          => $DB_PASSWORD,
    ],
    'app'=>[
        'app_name'          => $APP_NAME,
        'app_env'           => $APP_ENV,
        'app_url'           => $APP_URL,
    ]
];


$app = new Application(__DIR__, $app_config);

$app->db->applyMigrations();