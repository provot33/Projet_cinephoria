<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./Bootstrap_icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">
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
                    <a class="navbar-brand" href="index.php"><img src= "assets\logo_cinephoria\Capture d'écran 2024-09-26 225628.jpg" alt="logo du cinéma cinephoria" width="150px"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="page_de_connexion_cinephoria.php">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page_de_reservation_cinephoria.php">Réservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page_filtrage_film_cinephoria.php">Film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page_formulaire_formulaire_de_contact_cinephoria.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!---fin navbar bootstrap--->
    </header>


    <script src="./Bootstrap/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>