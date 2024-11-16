<div class="col-md-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <p class="card-text"></p>
                <img src="<?=getFilmImage ($film ['URL_AFFICHE']) ?>" class="img-fluid rounded-start" alt="photo de film">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"><?= $film['NOM'] ?></h4>
                    <p class="card-text"><?= $film['DESCRIPTION'] ?></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <a href="film.php?id=<?= $film['ID_FILM']; ?>" class="btn btn-primary">DESCRIPTIF DU FILM</a>
                </div>
            </div>
        </div>
    </div>
</div>