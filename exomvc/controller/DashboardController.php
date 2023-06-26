<?php

require_once '../model/header_top.php';
require_once '../model/title_get.php';
echo "tu m'appelles quand tu fonctionnes";
class DashboardController {
    // Déclaration de la classe DashboardController
    public function index() {
        // Déclaration de la méthode "index" de la classe DashboardController
        echo "Controller check";
        // Créer un objet XXX
        // $XXX = new XXX(Z);
        require 'view/dashboard.php';
        // Inclut le fichier de vue "dashboard.php"
    }
}
?>