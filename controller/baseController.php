<?php

// Chargement des classes
require_once('model/PostProducts.php');
require_once('model/PostRecipe.php');
require_once ('model/User.php');
/*require_once('model/CommentsRecipe.php');*/


function listRecipes()
{
    $postRecipes= new \Ksr\MyFridgeFood\Model\PostRecipe();
    $posts = $postRecipes->getRecipes();
    
    return $posts;

}
function addRecipe()
{
    $postRecipe = new \Ksr\MyFridgeFood\Model\PostRecipe();
    $posts = $postRecipe->setRecipes();
    $post = $postRecipe->setIngredients();

    return $posts;
}
function viewRecipe()
{
    $postRecipe = new \Ksr\MyFridgeFood\Model\PostRecipe();
    $post = $postRecipe->getRecipe();
    
    return $post;
}
function listProducts()
{
    $postProducts= new \Ksr\MyFridgeFood\Model\PostProducts();
    $posts = $postProducts->getProducts();
    
    return $posts;

}

function searchProductsByLetter($letter)
{
    $postSearch = new \Ksr\MyFridgeFood\Model\PostProducts();
    $post = $postSearch->getByLetter($letter);
    
    return $post;
}
function autoCompleteSearch($search)
{
    $postSearch = new \Ksr\MyFridgeFood\Model\PostProducts();
    $post = $postSearch->getBySearch($search);

    return $post;
}
function searchCategory($category)
{
    $postSearch = new \Ksr\MyFridgeFood\Model\PostProducts();
    $post = $postSearch->getByCategory($category);

    return $post;
}
function viewProduct($id)
{
    $postProduct = new \Ksr\MyFridgeFood\Model\PostProducts();
    $post = $postProduct->getProduct($id);
    
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
function connecting()
{
    $connect = new \Ksr\MyFridgeFood\Model\User();
    return $connect->connexion();
}
function deconnexion()
{
    $connect = new \Ksr\MyFridgeFood\Model\User();
    return $connect->deconnexion();
}
function inscription()
{
    $register = new \Ksr\MyFridgeFood\Model\User();
    return $register->register();
}