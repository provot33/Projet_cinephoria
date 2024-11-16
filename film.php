<?php
require_once('template\header.php');
require_once('lib\film.php');
$id = (int)$_GET['id'];

$film = getFilmById ($pdo,$id);

if ($film) { 
?>
<main>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= getFilmImage ($film ['URL_AFFICHE'])?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $film['NOM'] ?></h1>
            <p class="lead"><?= $film['DESCRIPTION'] ?></p>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">âge recommandé:<p><?= $film['AGE_MINIMUM'] ?></p></h2>
            
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Note de nos spectateurs:<?= $film['SCORE'] ?></h2>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"></h2>
            <?= $film['LABEL'] ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</main>
<?php 
} else { ?>
<div class='row text center'>
<h1>Film introuvable</h1>
</div>
<?php } ?>

<?php 
require_once ('template\footer.php');
?>