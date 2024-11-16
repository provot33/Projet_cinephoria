<?php
require_once('template\header.php');
require_once('lib\user.php');

$errors = [];
$messages = [];

if (isset($_POST['addUser'])) {
    $res = addUser ($pdo, $_POST['NOM'],$_POST['PRENOM'],$_POST['NOM_UTILISATEUR'],$_POST['MOT_DE_PASSE'],$_POST['ADRESSE_ELECTRONIQUE']);
    if ($res) { 

        $messages [] ='Merci pour votre inscription';
        
    } else {
        $errors []= 'Une erreur s\'est produite lors de votre inscription';
    }

}
?>
<main>
    <h1>Inscription</h1>
    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success">
            <?= $message; ?>
        </div>
    <?php } ?>

    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger">
            <?= $error; ?>
        </div>
    <?php } ?>
    <form method="post" enctype="multipart/form-data" name="">
        <div class="mb-3">
            <label for="NOM" class="form label">Nom</label>
            <input type="text" name="NOM" id="NOM" class="form control">
            </div>
            
            <div class="mb-3">
            <label for="PRENOM" class="form label">Prénom</label>
            <input type="text" name="PRENOM" id="PRENOM" class="form control">
            </div>

            <div class="mb-3">
            <label for="NOM_UTILISATEUR" class="form label">Nom utilisateur</label>
            <input type="text" name="NOM_UTILISATEUR" id="NOM_UTILISATEUR" class="form control">
            </div>

            <div class="mb-3">
            <label for="MOT_DE_PASSE" class="form label">Mot de passe</label>
            <input type="text" name="MOT_DE_PASSE" id="MOT_DE_PASSE" class="form control">
            </div>

            <div class="mb-3">
            <label for="ADRESSE_ELECTRONIQUE" class="form label">adresse éléctronique</label>
            <input type="text" name="ADRESSE_ELECTRONIQUE" id="ADRESSE_ELECTRONIQUE" class="form control">
            </div>
            
            <input type="submit" value="Inscription" name="addUser" class="btn btn-primary">
    </form>
</main>
<?php
require_once('template\footer.php');
?>
</main>