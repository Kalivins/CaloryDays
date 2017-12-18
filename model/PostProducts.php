<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostProducts extends Bdd
{
    public function getProducts()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->query('SELECT product_name, brands, image_small_url, image_url FROM food ORDER BY image_url DESC LIMIT 0,30');

        return $req;
    }

    public function getProduct($productId)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT product_name, brands, image_url, image_small_url, energy_100g FROM food WHERE id = :id');
        $req->bindParam(':id', $productId);
        $req->execute();
        $post = $req->fetch();

        return $post;
    }
}