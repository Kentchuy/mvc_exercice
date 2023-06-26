<?php
$url = $_SERVER['REQUEST_URI'];

$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$page = '/'.end($parts);

// $page contient maintenant la partie de l'URL après le dernier "/"


echo $path;
echo $parts;
echo $page;
// echo $url;

switch ($page) {
    case '/home':
    // Lorsque l'URL correspond à "/home"
        require_once 'controller/HomeController.php';
        // Inclut le fichier contenant la définition de la classe HomeController

        $controller = new HomeController();
        // Crée une nouvelle instance de la classe HomeController

        $controller->index();
        // Appelle la méthode "index" de l'objet HomeController

        break;
        // Termine le bloc "case" et sort du switch

    case '/login':
        require_once 'controller/LoginController.php';
        $controller = new LoginController();
        $controller->index();
        break;
    case '/register':
        require_once 'controller/RegisterController.php';
        $controller = new RegisterController();
        $controller->index();
        break;
    case '/dashboard':
        require_once 'controller/DashboardController.php';
        $controller = new DashboardController();
        $controller->index();
        break;
    default:
        // Gérer les erreurs 404 ou rediriger vers une page par défaut
        http_response_code(404);
        echo "<br>La page demandée n'existe pas<br>";
        break;
}
?>
