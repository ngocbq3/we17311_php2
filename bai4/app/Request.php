<?php

namespace App;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = str_replace('/we17311_php2/bai4/public/', '/', $path);
        $position = strpos($path, '?');
        if ($position) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
