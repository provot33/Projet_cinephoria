<div class="col-md-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <p class="card-text"></p>
                <img src="<?=getFilmImage ($cinema ['URL_AFFICHE']) ?>" class="img-fluid rounded-start" alt="photo de film">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"><?= $cinema['NOM'] ?></h4>
                    <p class="card-text"><?= $cinema['ADRESSE'] ?></p>
                    <p class="card-text"><small class="text-body-secondary"><?= $cinema['CODE_POSTAL'] ?></small></p>
                    <p class="card-text"><small class="text-body-secondary"><?= $cinema['VILLE'] ?></small></p>
                    <p class="card-text"><small class="text-body-secondary"><?= $cinema['PAYS'] ?></small></p>
                    <a href="film.php?id=<?= $cinema['ID_CINEMA']; ?>" class="btn btn-primary">NOS SEANCES</a>
                </div>
            </div>
        </div>
    </div>
</div>