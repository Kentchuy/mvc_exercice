<?php

// require_once 'model/Circle.php';
echo "fonctionne";
class HomeController {
    // Déclaration de la classe HomeController
    public function index() {
        // Déclaration de la méthode "index" de la classe HomeController
        include '../model/header_top.php';
        include '../model/title_get.php';
        echo "comme on s'amuse dis donc là";
        // Créer un objet Circle
        // $circle = new Circle(5);
        require 'view/home.php';
        // Inclut le fichier de vue "home.php"
    }
}
?>