<?php
require_once('lib/config.php');
require_once('lib/pdo.php');
require_once('lib\session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./Bootstrap_icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets\style_element_bootstrap.css">
    <link rel="stylesheet" href="assets\style_formulaire.css">
</head>

<body>
    <header>
        <!----début navbar bootstrap----->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="index.php"><img src="assets/image/logo_cinephoria/logo_cinephoria 1.png" alt="logo du cinéma cinephoria" width="150px"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php foreach ($mainMenu as $key => $value) { ?>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href=<?= $key ?> class="nav-link"><?= $value ?></a></li>
                        <?php } ?>
                        <?php 
                            $_SESSION['salarie'] = "PourLinstantOnAffiche";
                            if(isset($_SESSION['salarie'])) {
                            foreach ($mainMenuEmploye as $key => $value) { ?>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href=<?= $key ?> class="nav-link"><?= $value ?></a></li>
                        <?php }} ?>
                    </ul>
                    
                        <div class="col-md-3 text-end">
                            <?php if (!isset($_SESSION['user'])) { ?>
                                <a href="login.php" class="btn btn-outline-primary me-2">Se connecter</a>
                                <a href="inscription.php" class="btn btn-outline-primary me-2">S'inscrire</a>
                            <?php } else { ?>
                                <a href="logout.php" class="btn btn-primary">Se déconnecter</a>
                            <?php } ?>

                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!---fin navbar bootstrap--->
    </header>
    