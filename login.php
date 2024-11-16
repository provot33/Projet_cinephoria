<?php
require_once('template\header.php');
$errors = [];
$messages = [];

if (isset($_POST['loginUser'])) {
    $query = $pdo->prepare("SELECT * FROM UTILISATEUR WHERE ADRESSE_ELECTRONIQUE = :ADRESSE_ELECTRONIQUE");
    $query->bindParam(':ADRESSE_ELECTRONIQUE', $_POST['ADRESSE_ELECTRONIQUE'], PDO::PARAM_STR );
    $query->execute();
    $user= $query->fetch();

    $query = $pdo->prepare("SELECT PASSWORD(:MOT_DE_PASSE) AS PASSCRYPT FROM DUAL");
    $query->bindParam(':MOT_DE_PASSE', $_POST['MOT_DE_PASSE'], PDO::PARAM_STR );
    $query->execute();
    $passcrypt= $query->fetch();
    if ($user && $user['MOT_DE_PASSE'] === $passcrypt['PASSCRYPT']) {
            $messages[] = 'Connexion ok';
        } else {
            $errors[] = 'Email ou mot de passe erroné';
    }
}
?>
<main>
    <h1>Connexion</h1>
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
            <label for="ADRESSE_ELECTRONIQUE" class="form label">Email</label>
            <input type="text" name="ADRESSE_ELECTRONIQUE" id="ADRESSE_ELECTRONIQUE" class="form control">
            <div class="mb-3">
                <label for="MOT_DE_PASSE" class="form-label">Mot de passe</label>
                <input name="MOT_DE_PASSE" id="MOT_DE_PASSE" class="form-control">
            </div>
            <input type="submit" value="Connexion" name="loginUser" class="btn btn-primary">
    </form>
</main>
<?php
require_once('template\footer.php');
?>