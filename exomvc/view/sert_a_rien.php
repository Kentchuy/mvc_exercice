<?php
// Constante qui contiendra le chemin vers index.php / superglobale $_SERVER récupère des infos sur la page actuelle (le chemin complet vers le fichier index.php sous le nom SCRIPT_FILENAME - au format tableau - notamment)
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

// On sépare les paramètres et on les met dans le tableau $params
$params = explode('/', $_GET['p']);

// Check de paramètres existants
if ($params[0] != ""){
    $controller = ucfirst($params[0]);

    // Si $params[1] existe on récupère $params[1] et s'il existe pas on redirge vers l'index
    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controllers/'.$controller.'.php');

    // Ajouter une variable à la place du nom du controller ????
    $controller = new $controller();

    // Sorte de isset mais pour méthode
    if(method_exists($controller,$action)){
    // $articles->index(); est remplacé par 
    $controller->$action();
    }else{
        http_response_code(404);
        echo "la page demandée n'existe pas";
    }
}else{

}




// var_dump($params);

?>