<?php

namespace App\Model;
require "../vendor/autoload.php";

class Manager
{
    protected function dbconnect()
    {
        $db = new \PDO('mysql:host=ftp.cluster027.hosting.ovh.net;dbname=carolinebvportf1;charset=utf8', 'carolinebvportf1', '5QCVJP7NiVrfZkqmoAdb');
        return $db;
    }
}