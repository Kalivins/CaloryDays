<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class CommentsRecipe extends Bdd
{
    public function getComments($recipeId)
    {
        $pdo = $this->dbConnect();
        // à revoir, ou à traiter avec du php pour comparer l'id de la recette et l'id des commentaires associés
        $comments = $pdo->prepare('SELECT user.pseudo, user.email, commentsrecette.commentaire, DATE_FORMAT(commentsrecette.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM commentsRecette, user INNER JOIN comments_user_recette WHERE comments_user_recette.id_recette = :recipeid ORDER BY commentsrecette.comment_date DESC');
        $comments->bindParam(':recipeid', $recipeId);
        $comments->execute();
        

        return $comments;
    }

    public function postComment($comment, $user_id, $recette_id)
    {
        $pdo = $this->dbConnect();
        $comments = $pdo->prepare('
        BEGIN;
        INSERT INTO commentsrecette(commentaire, comment_date)
        VALUES(:comment, NOW());
        INSERT INTO comments_user_recette(id_user, id_recette, id_comment)
        VALUES(:user_id, :recette_id, LAST_INSERT_ID());
        COMMIT;
        ');
        $comments->bindParam(':comment', $comment);
        $comments->bindParam(':user_id', $user_id);
        $comments->bindParam(':recette_id', $recette_id);
        $affectedLines = $comments->execute();
        
        

        return $affectedLines;
    }
}