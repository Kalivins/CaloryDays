<?php

// Chargement des classes
require_once('model/PostProducts.php');
/*require_once('model/CommentsRecipe.php');*/

function listProducts()
{
    $postProducts = new \Ksr\MyFridgeFood\Model\PostProducts();
    $posts = $postProducts->getProducts();

    require('view/ProductsView.php');
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