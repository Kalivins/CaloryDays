<?php
require('controller/frontend.php');
require('vendor/autoload.php');
// La variable locate qui défini le "nom de domaine" du site
$locate = 'http://localhost/';

$router = new AltoRouter();

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array (
        'cache' => false,
));

$router->setBasePath('MyFridgeFood/');

$router->map('GET', '/', function() {
            global $twig;
    
            $params = ['nom' => "Sandrine"];
    
            $template = $twig->load('test.php.twig');
            echo $template->render($params);
});

$match = $router->match();




// On request l'uri, puis on le découpe avec un explode, on enlève les 2 premiers du tableaux de l'url
/*$uri = $_SERVER['REQUEST_URI'];
$parts_uri = explode("/", $uri);
unset($parts_uri[0], $parts_uri[1]);
// On a nettoyé l'uri, on redonne une valeur propre à $uri
$uri = join("/", $parts_uri);

switch ($parts_uri[2]){
    case '':
        header('Location: '.$locate.'MyFridgeFood/home');
        break;
    case 'home':
        include('view/head.php');
        include('view/nav.php');
        include('view/home.php');
        listRecipes();
        include('view/footer.php');
        break;
    case 'add_recipe':
        include('assets/include/head.php');
        include('assets/include/nav.php');
        echo "Ajouter une recette";
        include('assets/include/footer.php');
        break;
    case 'recipe':
        include('view/head.php');
        include('view/nav.php');
        viewRecipe($parts_uri[3]);
        include('view/footer.php');
        break;
    case 'addcomment':
        include('assets/include/head.php');
        include('assets/include/nav.php');
        echo 'Vous avez ajouter un commentaire';
        include('assets/include/footer.php');
        break;
    case 'product':
        include('assets/include/head.php');
        include('assets/include/nav.php');
        echo "Voici un produit";
        include('assets/include/footer.php');
        break;
    case 'energy':
        include('assets/include/head.php');
        include('assets/include/nav.php');
        echo "Voici les calories de vos produits/recettes";
        include('assets/include/footer.php');
        break;
    case 'fridge':
        include('assets/include/head.php');
        include('assets/include/nav.php');
        echo "Bienvenue dans votre frigo";
        include('assets/include/footer.php');
        break;
    case 'deconnexion':
        break;
    default:
        include('assets/include/head.php');
        include('assets/include/nav.php');
        echo "Error 404";
        include('assets/include/footer.php');
        break;       
}*/