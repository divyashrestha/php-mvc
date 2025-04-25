<?php

/** @var $app Application */

use app\controllers\SiteController;
use divyashrestha\Mvc\Application;

$app->router->get('/', [SiteController::class, 'index']);
?>