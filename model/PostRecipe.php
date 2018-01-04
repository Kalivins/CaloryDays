<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class PostRecipe extends Bdd
{
    public function getRecipes()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->query('SELECT id_recette, category, preparation, difficulty, time_prep, person_for, nom_recette, photo FROM recette ORDER BY id_recette LIMIT 0,30');
        $result = $req->fetchAll();

        return $result;
    }
    public function searchingRecipes($search)
    {
        $pdo = $this->dbConnect();
        $searching = '%'.$search.'%';
        $posts = $pdo->prepare('SELECT id_recette, category, nom_recette, difficulty, time_prep, person_for, preparation, photo FROM recette WHERE nom_recette LIKE :search LIMIT 30');

        $posts->bindParam(':search', $searching);
        $posts->execute();
        $post = $posts->fetchAll();

        return $post;
    }
    public function getByDifficultyRecipes($diff)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT id_recette, category, nom_recette, difficulty, time_prep, person_for, preparation, photo FROM recette WHERE difficulty = :diff LIMIT 30');
        $req->bindParam(':diff', $diff);
        $req->execute();
        $post = $req->fetchAll();

        return $post;
    }
    public function getByCategoryRecipes($category)
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT id_recette, category, nom_recette, difficulty, time_prep, person_for, preparation, photo FROM recette WHERE category = :category LIMIT 30');
        $req->bindParam(':category', $category);
        $req->execute();
        $post = $req->fetchAll();

        return $post;
    }
    public function setRecipes()
    {
        $id_noscrapped = explode('/', $_GET['url']);
        $id_user = intval($id_noscrapped[1]);
        $id_photo = $this->GetPic();
        $pdo = $this->dbConnect();
        $req = $pdo->prepare(
            'BEGIN;
            INSERT INTO recette
            (preparation, nom_recette, difficulty, time_prep, person_for, category, photo)
            VALUES (:preparation, :nom_recette, :difficulty, :time_prep, :person_for, :category, :photo);
            INSERT INTO user_recette
            (id_user, id_recette)
            VALUES (:id_user, LAST_INSERT_ID());
            COMMIT;
            ');
        $req->bindParam(':preparation', $_POST['preparation']);
        $req->bindParam(':nom_recette', $_POST['nom_recette']);
        $req->bindParam(':difficulty', $_POST['difficulty']);
        $req->bindParam(':time_prep', $_POST['time_prep']);
        $req->bindParam(':person_for', $_POST['person_for']);
        $req->bindParam(':category', $_POST['category']);
        $req->bindParam(':photo', $id_photo);
        $req->bindParam(':id_user', $id_user);
        return $req->execute();
    }
    public function setIngredients()
    {
        $pdo = $this->dbConnect();
        $id_recette = $this->GetID();
        $id_recette;

        $foods = $this->GetFood();
        foreach ($foods as $food){
            $req2 = $pdo->prepare(
                '
            INSERT INTO recette_food
            (id_recette, id_food)
            VALUES (:id_recette, :id_food);
            ');
            $req2->bindParam(':id_food', $food);
            $req2->bindParam(':id_recette', $id_recette);
            $req2->execute();
        }
    }
    public function GetID()
    {
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('SELECT id_recette FROM recette WHERE nom_recette = :nom_recette');
        $req->bindParam(':nom_recette', $_POST['nom_recette']);
        $req->execute();
        $id_recette = $req->fetch();
        return $id_recette['id_recette'];
    }
    public function GetPic()
    {
        $dossier = "./upload/";
        $max_size = 1000000;
        $file_size = filesize($_FILES['file']['tmp_name']);
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $nfile = explode('.', $newfilename);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $file_extension = strrchr($_FILES['file']['name'], '.');

        if(!in_array($file_extension, $extensions))
        {
            return false;
        }
        if(!isset($erreur))
        {
            if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $newfilename))
            {
                return $nfile[0];
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    public function GetFood()
    {
        $id_foods = [];
        $id_food = explode(',', $_POST['id_food']);
        foreach ($id_food as $id){
            $id_foods[] = intval($id);
        }
        return $id_foods;
    }
    public function getRecipe()
    {
        $id_noscrapped = explode('/', $_GET['url']);
        $recipeId = intval($id_noscrapped[1]);
        $pdo = $this->dbConnect();
        $req = $pdo->prepare('
        SELECT user.pseudo, user.email, recette.preparation, recette.nom_recette, recette.difficulty, recette.time_prep, recette.person_for, recette.photo 
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

        var_dump($food_id);
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