<?php

namespace Ksr\MyFridgeFood\Model;

require_once("model/BDD.php");

class CommentsRecipe extends Bdd
{
    public function getComments($postId)
    {
        $pdo = $this->dbConnect();
        $comments = $pdo->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $pdo = $this->dbConnect();
        $comments = $pdo->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
}