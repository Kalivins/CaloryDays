<?php

namespace Ksr\MyFridgeFood\Model;

class Bdd
{
    protected function dbConnect()
    {
            $pdo = new \PDO("mysql:host=localhost;dbname=food;charset=utf8;", 'root', '');
            return $pdo;
    }
}