<?php
require_once('template/header.php');
require_once('lib/cinema.php');

$id = (int)$_GET['id'];

$cinema =getCinemaById($pdo,$id);

if ($cinema) { 
?>
<main>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?=getCinemaImage ($cinema ['URL_CINEMA'])?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $cinema['NOM']?></h1>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Adresse:<p><?= $cinema['ADRESSE'] ?></p></h2>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Ville:<p><?= $cinema['VILLE'] ?></p></h2>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Code postal:<?= $cinema['CODE_POSTAL'] ?></h2>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Pays:<?= $cinema['PAYS'] ?></h2>
            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"></h2>
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
<h1>Cinema introuvable</h1>
</div>
<?php } ?>

<?php 
require_once ('template/footer.php');
?>