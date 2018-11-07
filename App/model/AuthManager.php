<?php
namespace App\model;
require "vendor/autoload.php";

use App\model\Manager;

class AuthManager extends Manager
{
    public function getMember($pseudo)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT id, user, pwd, level, email FROM users WHERE user = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $result = $req->fetch();
        return $result;
    }
}