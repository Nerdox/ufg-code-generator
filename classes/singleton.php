<?php

namespace classes;

class Singleton
{
    protected static $instances = [];

    public static function getInstance() {
        $class = get_called_class();

        if (!isset(self::$instances[$class]))
            self::$instances[$class] = new $class;

        return self::$instances[$class];
    }
}

include "classes/validator.php";
include "classes/generator.php";