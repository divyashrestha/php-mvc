<?php

if (!function_exists('print_data')) {
    function print_data($data, $halt = false): void
    {
        echo "<pre>";
        print_r($data);
        if ($halt) die;
    }
}

if (!function_exists('log_message')) {
    function log_message($message, $halt = false): void
    {
        echo "[" . date("Y-m-d H:i:s") . "] - " . $message . PHP_EOL;
        if ($halt) die;
    }
}


if (!function_exists('console_log')) {
    function console_log($message, $halt = false): void
    {
        error_log("--------------------", 0);
        error_log($message, 0);
        error_log("--------------------", 0);
        if ($halt) die;
    }
}

