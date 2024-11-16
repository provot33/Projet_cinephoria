<?php
require_once('template\header.php');
require_once('lib\film.php');
require_once('lib\tools.php');

$errors = [];
$messages = [];
$film = [
    'NOM' => '',
    'DESCRIPTION' => '',
    'AGE_MINIMUM' => '',
    'SCORE' => '',
    'LABEL' => '',
];

if (isset($_POST['saveFilm'])) {
    $fileName = null;
    // Si un fichier a été envoyé
    if (isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
        // la méthode getimagessize va retourner false si le fichier n'est pas une image
        $checkImage = getimagesize($_FILES['file']['tmp_name']);
        if ($checkImage !== false) {
            // Si c'est une image on traite
            $fileName = uniqid() . '-' . slugify($_FILES['file']['name']);
            move_uploaded_file($_FILES['file']['tmp_name'], _FILMS_IMG_PATH_. $fileName);
        } else {
            // Sinon on affiche un message d'erreur
            $errors[] = 'Le fichier doit être une image';
        }
    }

    if (!$errors) {
        $res = saveFilm($pdo, $_POST['NOM'], $_POST['DESCRIPTION'], $_POST['AGE_MINIMUM'], $_POST['SCORE'], $_POST['LABEL'], $fileName);
    
        if ($res) {
            $messages[] = 'Le film a bien été sauvegardée';
        } else {
            $errors[] = 'Le film n\'a pas été sauvegardée';
        }
    }

    $film = [
        'NOM' => $_POST['NOM'],
        'DESCRIPTION' => $_POST['DESCRIPTION'],
        'AGE_MINIMUM' => $_POST['AGE_MINIMUM'],
        'SCORE' => $_POST['SCORE'],
        'LABEL' => $_POST['LABEL'],
    ];
}
?>
<main>
    <h1>Ajouter un film</h1>
    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success">
            <?= $message; ?>
        </div>
    <?php } ?>

    <?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?=$error; ?>
    </div>
    <?php } ?>

    <form method="post" enctype="multipart/form-data" name="">
        <div class="mb-3">
            <label for="NOM" class="form label">Titre</label>
            <input type="text" name="NOM" id="NOM" class="form control" value="<?=$film['NOM'];?>">
        <div class="mb-3">
            <label for="DESCRIPTION" class="form-label">Description</label>
            <textarea name="DESCRIPTION" id="DESCRIPTION" cols="20" rows="3" class="form-control"><?=$film['DESCRIPTION'];?></textarea>
        </div>
        <div class="mb-3">
            <label for="AGE_MINIMUM">Age minimum</label>
            <input type="text" name="AGE_MINIMUM" id="AGE_MINIMUM" class="form control" class="form control" value="<?=$film['AGE_MINIMUM'];?>">
        </div>
        <div class="mb-3">
            <label for="SCORE">Score</label>
            <input type="text" name="SCORE" id="SCORE" class="form control" value="<?=$film['SCORE'] ;?>">
        </div>
        <div class="mb-3">
            <label for="LABEL">Label</label>
            <input type="text" name="LABEL" id="LABEL" class="form control" value="<?=$film['LABEL'] ;?>">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Image</label>
            <input type="file" name="file" id="file">
        </div>
        <input type="submit" value="Enregistrer" name="saveFilm" class="btn btn-primary">
    </form>
</main>
<?php
require_once('template\footer.php');
?>