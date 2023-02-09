<?php

namespace App\Controllers;

class SiteController
{
    public function index()
    {
        echo static::class . " Action Index<br>";
    }
    public function about()
    {
        echo static::class . " Action About<br />";
    }
}
