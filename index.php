<?php
session_start();
require('controller/baseController.php');
require('vendor/autoload.php');
// La variable locate qui défini le "nom de domaine" du site
$locate = 'http://localhost';

$router = new AltoRouter();

$loader = new Twig_Loader_Filesystem(__DIR__ .'/view');
$twig = new Twig_Environment($loader, array (
        'cache' => true,
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

            $products = listProducts();
            $params = [
                "locate" => $locate,
                "session" => $_SESSION,
                "products" => $products,
                
            ];
            $template = $twig->load('add_recipe.html');
            echo $template->render($params);
});

$router->map( 'POST|GET', '/add_recipe/[i:id]', function() {

    global $twig;
    global $locate;

    $add = addRecipe();
    $params = [
        "locate" => $locate,
        "session" => $_SESSION,
        "bool" => $add

    ];
        $template = $twig->load('recipe_result.html');
        echo $template->render($params);
});

$router->map( 'POST|GET', '/recipe/[i:id]', function() {
    
            global $twig;
            global $locate;
    
            $recipe = viewRecipe();
            $params = [
                "locate" => $locate,
                "recipe_user" => $recipe['recipe_user'],
                "ingredient" => $recipe['ingredient'],
                "session" => $_SESSION
                
            ];
            $template = $twig->load('recipeView.html');
            echo $template->render($params);
});

$router->map( 'POST|GET', '/product/[i:id]', function() {

    global $twig;
    global $locate;

    $product = viewProduct();
    $params = [
        "locate" => $locate,
        "product" => $product,
        "session" => $_SESSION

    ];
    $template = $twig->load('productView.html');
    echo $template->render($params);
});

$router->map( 'POST|GET', '/energy', function() {
    
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

    deconnexion();
    $template = $twig->load('deconnexion.html');
    echo $template->render();
});

$router->map( 'POST', '/energy/letter', function() {
            
            $products = searchProductsByLetter($_POST['lettre']);
    
            echo json_encode($products);
            
});

$router->map( 'POST', '/category', function() {

    $products = searchCategory($_POST['category']);

    echo json_encode($products);

});

$router->map( 'POST', '/difficulty', function() {

    $recipes = searchDiffRecipe($_POST['difficulty']);

    echo json_encode($recipes);

});

$router->map( 'POST', '/category_r', function() {

    $recipes = searchCategoryRecipe($_POST['category']);

    echo json_encode($recipes);

});

$router->map( 'POST', '/search', function() {

    $products = AutoCompleteSearch($_POST['search']);

    echo json_encode($products);

});

$router->map( 'POST', '/search_r', function() {

    $recipes = searchRecipe($_POST['search']);

    echo json_encode($recipes);

});

$router->map( 'POST', '/connexion', function() {

    global $twig;
    global $locate;

    connecting();
    header('Location: http://localhost/MyFridgeFood/home');

});
$router->map( 'POST', '/register', function() {
    
        global $twig;
        global $locate;
    
        inscription();
        header('Location: http://localhost/MyFridgeFood/home');
    
    });

$match = $router->match();


if( $match && is_callable( $match['target'] ) ) {
call_user_func_array( $match['target'], $match['params'] );
} else {

header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}