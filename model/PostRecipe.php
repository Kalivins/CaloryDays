<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostRecipe extends Bdd
{
    public function getRecipes()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->query('SELECT id_recette, preparation, nom_recette, photo FROM recette LIMIT 0,30');

        return $req;
    }

    public function getRecipe($recipeId)
    {
        $pdo = $this->dbConnect();
        // Requête à revoir ou à traiter avec du php pour comparer l'id de la recette et les id des articles food associés
        $req = $pdo->prepare('
        SELECT user.pseudo, user.email, food.id, food.product_name, recette.preparation, recette.nom_recette, recette.photo 
        FROM recette, user, food 
        INNER JOIN user_recette 
        ON user_recette.id_recette = :id 
        INNER JOIN recette_food 
        ON recette_food.id_recette = :id
        ');
        $req->bindParam(':id', $recipeId);
        $req->execute();
        $post = $req->fetch();
        return $post;
    }
}