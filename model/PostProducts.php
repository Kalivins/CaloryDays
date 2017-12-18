<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostProducts extends Bdd
{
    public function getProducts()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->query('SELECT product_name, brands, image_url FROM food LIMIT 0,5');

        return $req;
    }

    public function getProduct($postId)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT product_name, brands, image_url, energy_100g FROM food WHERE id = :id');
        $req->bindParam(':id', $postId);
        $req->execute();
        $post = $req->fetch();

        return $post;
    }
}