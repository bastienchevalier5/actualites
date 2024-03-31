<?php

namespace Autoloader;

class Autoloader
{
    static function register($class_name)
    {
        spl_autoload_register(function () use ($class_name) {
            include_once $class_name . '.php';
        });
    }
}
