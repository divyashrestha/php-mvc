<?php

namespace app\middlewares;

use divyashrestha\Mvc\Application;
use divyashrestha\Mvc\middlewares\BaseMiddleware;

class BasicAuth extends BaseMiddleware
{
    public function execute(): void
    {
        if (Application::basicAuth()) {
            $AUTH_USER = 'codemantra';
            $AUTH_PASS = 'password';
            header('Cache-Control: no-cache, must-revalidate, max-age=0');
            $has_supplied_credentials = ( ! (empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW'])));
            $is_not_authenticated = ( ! $has_supplied_credentials || $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
                $_SERVER['PHP_AUTH_PW'] != $AUTH_PASS);
            if ($is_not_authenticated) {
                header('HTTP/1.1 401 Authorization Required');
                header('WWW-Authenticate: Basic realm="Access denied"');
                exit;
            }
        }
    }
}