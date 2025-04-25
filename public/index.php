<?php

use divyashrestha\Mvc\Application;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

extract($config);

$app_config = [
    'db' => [
        'dsn' => "mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME",
        'user' => $DB_USER,
        'password' => $DB_PASSWORD,
    ],
    'app' => [
        'app_name' => $APP_NAME,
        'app_env' => $APP_ENV,
        'app_url' => $APP_URL,
    ]
];

if ($APP_ENV == 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
}

$app = new Application(dirname(__DIR__), $app_config);

$app->on(Application::EVENT_BEFORE_REQUEST, function () {
    // echo "Before request from second installation";
});


require_once __DIR__ . '/../routes/web.php';
$app->run();