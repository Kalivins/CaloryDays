<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostProducts extends Bdd
{
    public function getProducts()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->query('SELECT product_name, brands, main_category_fr, energy_100g, image_small_url, image_url FROM food ORDER BY product_name LIMIT 0,30');

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
    public function getByLetter($letter)
    {
        $pdo = $this->dbConnect();
        $letter = $letter.'%';
        $req = $pdo->prepare('SELECT product_name, brands, main_category_fr, image_url, image_small_url, energy_100g FROM food WHERE product_name LIKE :letter ORDER BY main_category_fr DESC LIMIT 40');
        $req->bindParam(':letter', $letter);
        $req->execute();
        $posts = $req->fetchAll();
        
        foreach($posts as $product){
            if($product['main_category_fr'] == ""){
                $product['main_category_fr'] = "Hors Catégorie";
            }
            if($product['energy_100g'] == ""){
                $product['energy_100g'] = 0;
            }
            if($product['image_small_url'] == ""){
                $product['image_small_url'] = "http://localhost/MyFridgeFood/assets/img/void.png";
            }
            $post[] = array_unique($product);
        }
        return $post;
    }
    public function getByCategory($category)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT product_name, brands, image_url, image_small_url, energy_100g, main_category_fr FROM food WHERE main_category_fr = :category LIMIT 40');
        $req->bindParam(':category', $category);
        $req->execute();
        $post = $req->fetchAll();
        
        return $post;
    }
    public function getByAdditive($additive)
    {
        
    }
    public function getProductByCalorie($number, $plusoumoins)
    {
        
    }
}