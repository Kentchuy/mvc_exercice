<?php 
include '../model/header_top.php';
include '../model/header_bottom.php';
include '../model/title_get.php';
include '../model/button_get.php';
// require_once('../router.php');
echo header_top();
?>
    <title><?= title_get(); ?></title>
<?= header_bottom(); ?>
<body>
    <div class="wrapper">
        <h1><?= title_get(); ?></h1>
        <p>Hello world</p>
        <div class="liens">
            <!-- <a href="/view/dashboard.php" class="disabled">Tableau de bord</a>
            <a href="/view/home.php" class="enabled">Accueil</a>
            <a href="/view/login.php" class="enabled">Connexion</a>
            <a href="/view/register.php" class="enabled">Inscription</a> -->
            <?= button_get(); ?>
        </div>
    </div>
    
</body>
</html>