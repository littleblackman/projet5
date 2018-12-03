<?php

namespace App\Model;
require "../vendor/autoload.php";

class Manager
{
    protected function dbconnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
        return $db;
    }
}