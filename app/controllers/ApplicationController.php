<?php

namespace app\controllers;

use app\middlewares\BasicAuth;
use divyashrestha\Mvc\Controller;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new BasicAuth([]));
    }
}