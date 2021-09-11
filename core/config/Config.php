<?php

namespace core\config;

class Config
{
    private $params = [];
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get($key)
    {
        return (isset($this->params[$key]) ? $this->params[$key] : null);
    }

    public function set($key, $value)
    {
        $this->params[$key] = $value;
    }

    public function has($key)
    {
        return isset($this->params[$key]);
    }

    public function getAll()
    {
        return $this->params;
    }

    public function load($filename)
    {
        $file = DIR_CONFIG . $filename . '.php';
        if (file_exists($file)) {
            $additionalParams = require($file);
            if(empty($additionalParams)){
                $additionalParams = [];
            }
            $this->params = array_merge($this->params, $additionalParams);
        } else {
            echo "<pre>";
            print_r(new \Exception('Error: Could not load config file ' . $filename . '!'));
            exit();
        }
    }

}