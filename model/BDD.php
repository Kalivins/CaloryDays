<?php

namespace Ksr\MyFridgeFood\Model;

class Bdd
{
    protected function dbConnect()
    {
            $pdo = new \PDO("mysql:host=127.0.0.1;dbname=food;charset=utf8;", 'root', '');
            return $pdo;
    }
}