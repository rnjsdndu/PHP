<?php
namespace src\App

class Route
{
    private static $actions = [];

    public static function __callStatic($method, $args)
    {
        $req = strtolower($_SERVER['REQUEST_METHOD'])

        if($req == $method){
            self::$actions[] = $args;
        }
    }
}
