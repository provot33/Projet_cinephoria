<?php
require_once ('template\header.php');
require_once('lib\film.php');
$films = getFilms($pdo,_HOME_FILM_LIMIT_);
?>
<main>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets\image\logo_cinephoria\logo_arbre_cinephoria.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Cuisinea" width="550 px" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Avec Cinephoria, Ne restez pas simple spectacteur! </h1>
            <p class="lead">Cinephoria, acteur majeur de l'industrie du divertissment en France, a été fondé il y a plusieurs décennies par des passionnés de cinema. Aujourd'hui, c'est plus de 6 cinémas repartis en France et en Belgique. Cinephoria soutient également l'échologie en reversant une partie de son chiffre d'affaire à des initiatives échologiques.
                </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="films.php" class="btn btn-primary">Voir nos séances de films</a>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <h1>Toutes nos nouveautés du mercredi</h1>
        <?php
        foreach ($films as $key => $film) {
            include 'template/film_partial.php';
        }
        ?>
    </div>
</main>
<?php
require_once('template\footer.php');
?>