<?php
session_start();
require('controller/baseController.php');
require('vendor/autoload.php');
// La variable locate qui défini le "nom de domaine" du site
$locate = 'http://localhost';

$router = new AltoRouter();

$loader = new Twig_Loader_Filesystem(__DIR__ .'/view');
$twig = new Twig_Environment($loader, array (
        'cache' => false,
));

$router->setBasePath('MyFridgeFood/');

$router->map( 'GET', '/', function() {
    
            header('Location: '.$locate.'/MyFridgeFood/home');
});
$router->map( 'POST|GET', '/home', function() {
    
            global $twig;
            global $locate;
    
            $recipes[] = listRecipes();
            $params = [
                "locate" => $locate,
                "recipes" => $recipes,
                "session" => $_SESSION
                
            ];
            $template = $twig->load('home.html');
            echo $template->render($params);
});

$router->map( 'GET', '/add_recipe', function() {
    
            global $twig;
            global $locate;
    
            $params = [
                "locate" => $locate,
                "session" => $_SESSION
                
            ];
            $template = $twig->load('add_recipe.html');
            echo $template->render($params);
});

$router->map( 'POST|GET', '/recipe/[i:id]', function() {
    
            global $twig;
            global $locate;
    
            $recipe = viewRecipe($_POST['id']);
            $params = [
                "locate" => $locate,
                "recipe_user" => $recipe['recipe_user'],
                "ingredient" => $recipe['ingredient'],
                "session" => $_SESSION
                
            ];
            $template = $twig->load('recipeView.html');
            echo $template->render($params);
});

$router->map( 'GET', '/energy', function() {
    
            global $twig;
            global $locate;
    
            $products = listProducts();
            $params = [
                "locate" => $locate,
                "products" => $products,
                "session" => $_SESSION
                
            ];
            $template = $twig->load('energy.html');
            echo $template->render($params);
});

$router->map( 'POST|GET', '/deconnexion', function() {

    global $twig;
    global $locate;

    $template = $twig->load('deconnexion.html');
    echo $template->render();
    deconnexion();
});

$router->map( 'POST', '/energy/letter', function() {
    
            global $twig;
            global $locate;
            
            $products = searchProductsByLetter($_POST['lettre']);
    
            echo json_encode($products);
            
});

$router->map( 'POST', '/search', function() {

    global $twig;
    global $locate;

    $products = AutoCompleteSearch($_POST['search']);

    echo json_encode($products);

});

$router->map( 'POST', '/connexion', function() {

    global $twig;
    global $locate;

    connecting();
    header('Location: http://localhost/MyFridgeFood/home');

});

$match = $router->match();


if( $match && is_callable( $match['target'] ) ) {
call_user_func_array( $match['target'], $match['params'] );
} else {

header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
/*
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