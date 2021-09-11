<?php
require_once dirname(__DIR__) . "/config/config.php";

error_reporting(E_ALL);

spl_autoload_register(function ($className) {
    $file = DIR_APP . '/' . str_replace('\\', '/', $className) . '.php';
    if (is_file($file)) {
        include_once($file);
        return true;
    }
    return false;
});

// config
$config = \core\config\Config::getInstance();
$config->load('params');