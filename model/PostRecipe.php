<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostRecipe extends Bdd
{
    public function getRecipes()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->query('SELECT id_recette, preparation, nom_recette, photo FROM recette LIMIT 0,30');
        $result = $req->fetch();

        return $result;
    }
    public function setRecipes()
    {
        $id_noscrapped = explode('/', $_GET['url']);
        $id_user = intval($id_noscrapped[1]);
        $pdo = $this->dbConnect();
        $req = $pdo->prepare(
            'BEGIN;
            INSERT INTO recette
            (preparation, nom_recette, photo)
            VALUES (:preparation, :nom_recette, 10);
            INSERT INTO recette_food
            (id_recette, id_food)
            VALUES (LAST_INSERT_ID(), 11);
            INSERT INTO user_recette
            (id_user, id_recette)
            VALUES (:id_user, LAST_INSERT_ID());
            COMMIT;
            ');
        $req->bindParam(':preparation', $_POST['preparation']);
        $req->bindParam(':nom_recette', $_POST['nom_recette']);
        //$req->bindParam(':photo', 10); //$_POST['photo']
        //$req->bindParam(':id_food', 11); //$_POST['id_food']
        $req->bindParam(':id_user', $id_user);

        return $req->execute();
    }

    public function getRecipe($recipeId)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('
        SELECT user.pseudo, user.email, recette.preparation, recette.nom_recette, recette.photo 
        FROM recette, user
        INNER JOIN user_recette 
        ON user_recette.id_recette = :id
        ');
        $req->bindParam(':id', $recipeId);
        $req->execute();
        $post['recipe_user'] = $req->fetch();
        
        $req2 = $pdo->prepare('
        SELECT id_food FROM `recette_food` WHERE id_recette = :id 
        ');
        $req2->bindParam(':id', $recipeId);
        $req2->execute();
        $food_id[] = $req2->fetchAll();
        
        // Welcome to the hell of loops
        foreach($food_id as $ids){
            foreach($ids as $idss){
                $idss = array_unique($idss);
                foreach($idss as $idsss){
            $req3 = $pdo->prepare('
            SELECT food.id, food.product_name
            FROM food
            WHERE food.id = :idd
            ');
            $req3->bindParam(':idd', $idsss);
            $req3->execute();
            $ingredient[] = $req3->fetch();
                }
            }
        }
        $post['ingredient'] = $ingredient;
        return $post;
    }
}