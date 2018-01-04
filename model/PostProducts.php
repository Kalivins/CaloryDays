<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostProducts extends Bdd
{
    public function getProducts()
    {
        $pdo = $this->dbConnect();
        $posts = $pdo->query('SELECT id, product_name, brands, main_category_fr, energy_100g, image_small_url, image_url FROM food ORDER BY product_name LIMIT 50');

        $req = $this->SetValues($posts);
        return $req;
    }

    public function getProduct($productId)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT id, product_name, brands, image_url, image_small_url, energy_100g FROM food WHERE id = :id');
        $req->bindParam(':id', $productId);
        $req->execute();
        $posts = $req->fetch();

        $post = $this->SetValues($posts);
        return $post;
    }
    public function KjtoKcal($Kilojoule){
        $unit_Kcal = 0.239006;

        $Kcal = $unit_Kcal * $Kilojoule;

            $Kcal = floor($Kcal);

        return $Kcal;
    }
    public function SetValues($posts){

        $x = 0;
        foreach($posts as $product){
            if($product['main_category_fr'] == ""){
                $product['main_category_fr'] = "Hors Catégorie";
            }
            if($product['energy_100g'] == "") {
                $product['energy_100g'] = "Non communiqué";
            }
            if($product['image_small_url'] == ""){
                $product['image_small_url'] = "http://localhost/MyFridgeFood/assets/img/void.png";
            }
            $post[] = array_unique($product);

            if($post[$x]['energy_100g'] != "Non communiqué") {
                $post[$x]['calorie_100g'] = $this->KjtoKcal($post[$x]['energy_100g']);
                $x++;
            } else {
                $post[$x]['calorie_100g'] = "Non communiqué";
                $x++;
            }
        }
        return $post;
    }
    public function getBySearch($search){

        $pdo = $this->dbConnect();
        // $search = preg_replace('#[^a-zA-Z ?0-9]#i',"", $search);
        $searching = '%'.$search.'%';
        $posts = $pdo->prepare('SELECT id, product_name, brands, main_category_fr, image_url, image_small_url, energy_100g FROM food WHERE product_name LIKE :search LIMIT 40');

        $posts->bindParam(':search', $searching);
        $posts->execute();
        $post = $posts->fetchAll();

        $result = $this->SetValues($post);

        return $result;
    }
    public function getByLetter($letter)
    {
        if($letter == "default"){
            $post = $this->getProducts();
            return $post;
        } else {
            $pdo = $this->dbConnect();
            $letter = $letter . '%';
            $req = $pdo->prepare('SELECT id, product_name, brands, main_category_fr, image_url, image_small_url, energy_100g FROM food WHERE product_name LIKE :letter ORDER BY main_category_fr DESC LIMIT 40');
            $req->bindParam(':letter', $letter);
            $req->execute();
            $posts = $req->fetchAll();

            $post = $this->SetValues($posts);

            return $post;
        }
    }
    public function getByCategory($category)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT id, product_name, brands, image_url, image_small_url, energy_100g, main_category_fr FROM food WHERE main_category_fr = :category LIMIT 40');
        $req->bindParam(':category', $category);
        $req->execute();
        $post = $req->fetchAll();

        $posts = $this->SetValues($post);
        
        return $posts;
    }
    public function getByAdditive($additive)
    {
        
    }
    public function getProductByCalorie($number, $plusoumoins)
    {
        
    }
}