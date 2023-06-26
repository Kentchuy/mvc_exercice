<?php
    // 
    // $url = $_SERVER['REQUEST_URI']; 
    // $path = parse_url($url, PHP_URL_PATH);
    // $parts = explode('/', $path);
    // $page = end($parts);
    // $extension = ".php";
    // $fileName = str_replace($extension, "", $page);
    // $actualTest = '<a href="'.$url.'"';
    // echo '<a href="/view/dashboard.php" class="enabled">Tableau de bord</a>';
    // echo '<a href="'.$url.'" class="disabled">'.$fileName.'</a>';
    // =========================================TEST FONCTIONNEL  
function button_get(){

    $url = $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $parts = explode('/', $path);
    $page = end($parts);
    $extension = ".php";
    $fileName = str_replace($extension, "", $page);
    $fillerName = "";

        // Selon le cas on change par exemple le home en accueil (affichage)
        switch($fileName){
            case "dashboard":
                $fillerName = "Tableau de bord";
            break;
    
            case "home":
                $fillerName = "Accueil";
            break;
    
            case "login":
                $fillerName = "Connexion";
            break;
    
            case "register":
                $fillerName = "Inscription";
            break;
        }

    // Je sépare la ligne de code en 2 pour avoir le path identifiable pour être comparé puis je concatène la suite
    $dashboardTest = '<a href="/view/dashboard.php"';
    $dashboardSuite = 'class="enabled">Tableau de bord</a>';
    $homeTest = '<a href="/view/home.php"';
    $homeSuite = 'class="enabled">Accueil</a>';
    $loginTest = '<a href="/view/login.php"';
    $loginSuite = 'class="enabled">Connexion</a>';
    $registerTest = '<a href="/view/register.php"';
    $registerSuite = 'class="enabled">Inscription</a>';
    $actualTest = '<a href="'.$url.'"';
    $actualSuite = 'class="disabled">'.$fillerName.'</a>';


// on check les correspondances avec la première moitié puis rajoute la 2eme
    switch($actualTest){
        case "$dashboardTest":
            echo "$dashboardTest . $actualSuite";
            echo "$homeTest . $homeSuite";
            echo "$loginTest . $loginSuite";
            echo "$registerTest . $registerSuite";
        break;

        case "$homeTest":
            echo "$dashboardTest . $dashboardSuite";
            echo "$homeTest . $actualSuite";
            echo "$loginTest . $loginSuite";
            echo "$registerTest . $registerSuite";
        break;

        case "$loginTest":
            echo "$dashboardTest . $dashboardSuite";
            echo "$homeTest . $homeSuite";
            echo"$loginTest . $actualSuite";
            echo "$registerTest . $registerSuite";
        break;
        
        case "$registerTest":
            echo "$dashboardTest . $dashboardSuite";
            echo "$homeTest . $homeSuite";
            echo "$loginTest . $loginSuite";
            echo"$registerTest . $actualSuite";
            break;
        default :
            echo "erreur switch lien bouton";
            break;
    }

}