<?php

function title_get(){
$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$page = '/'.end($parts);
// $page contient maintenant la partie de l'URL après le dernier "/"

switch ($page) {
    case '/home.php':
    // Lorsque l'URL correspond à "/home"
        echo 'Accueil';

        break;
        // Termine le bloc "case" et sort du switch

    case '/login.php':
        echo 'Connexion';
        break;
    case '/register.php':
        echo 'Inscription';
        break;
    case '/dashboard.php':
        echo 'Tableau de bord';
        break;
    default:
        // Gérer les erreurs 404 ou rediriger vers une page par défaut
        echo "<br>Erreur<br>";
        break;
}
}

?>