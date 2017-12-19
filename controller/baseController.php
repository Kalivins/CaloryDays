<?php

// Chargement des classes
require_once('model/PostProducts.php');
require_once('model/PostRecipe.php');
/*require_once('model/CommentsRecipe.php');*/


function listRecipes()
{
    $postRecipes= new \Ksr\MyFridgeFood\Model\PostRecipe();
    $posts = $postRecipes->getRecipes();
    
    return $posts;

}

function viewRecipe($id)
{
    $postRecipe = new \Ksr\MyFridgeFood\Model\PostRecipe();
    $post = $postRecipe->getRecipe($id);
    
    return $post;
}
function listComments()
{
    $pdo = new Ksr\Model\Bdd();
    $commentsRecipe = new Ksr\Model\CommentsRecipe();

    $post = $pdo->getComments($parts_uri[3]);
    $comments = $commentRecipe->getComments($parts_uri[3]);

    require('view/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentsRecipe = new Ksr\Model\CommentsRecipe();

    $affectedLines = $commentsRecipe->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter le commentaire !");
    }
    else {
        header('Location: '.$locate.'MyFridgeFood/addcomment/'.$postId);
    }
} 