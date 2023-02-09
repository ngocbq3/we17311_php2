<?php

namespace App;

class Router
{
    public static $routes = [];

    public static function get($path, $callback)
    {
        static::$routes['get'][$path] = $callback;
    }
    public static function post($path, $callback)
    {
        static::$routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = str_replace('/we17311_php2/bai4/public/', '/', $path);


        echo "<pre>";
        var_dump(static::$routes);
    }
}
