<?php
session_start();
require('controller/frontend.php');
// La variable locate qui défini le "nom de domaine" du site
$locate = 'http://localhost/';
// On request l'uri, puis on le découpe avec un explode, on enlève les 2 premiers du tableaux de l'url
$uri = $_SERVER['REQUEST_URI'];
$parts_uri = explode("/", $uri);
unset($parts_uri[0], $parts_uri[1]);
// On a nettoyé l'uri, on redonne une valeur propre à $uri
$uri = join("/", $parts_uri);

switch ($parts_uri[2]){
    case '':
        header('Location: '.$locate.'MyFridgeFood/home');
        break;
    case 'home':
        echo "Bienvenue sur la page d'accueil !";
        listProducts();
        break;
    case 'add_recipe':
        echo "Ajouter une recette";
        break;
    case 'recipe':
        echo "Voici votre recette";
        break;
    case 'addcomment':
        echo 'Vous avez ajouter un commentaire';
        break;
    case 'product':
        echo "Voici un produit";
        break;
    case 'energy':
        echo "Voici les calories de vos produits/recettes";
        break;
    case 'fridge':
        echo "Bienvenue dans votre frigo";
        break;
    case 'deconnexion':
        break;
    default:
        echo "Error 404";
        break;       
}