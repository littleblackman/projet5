<?php
namespace App\model;
require "vendor/autoload.php";


class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
        return $db;
    }
}