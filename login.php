<?php
require_once('template\header.php');
require_once('lib/user.php');
$errors = [];
$messages = [];

if (isset($_POST['loginUser'])) {

    $user = verifyUserLoginPassword($pdo, $_POST['ADRESSE_ELECTRONIQUE'], $_POST['MOT_DE_PASSE']);
    if ($user) {
        $_SESSION['user'] = ['email' => $user['email']];
        header('location: index.php');
    } else {
        $errors[] = 'Email ou mot de passe incorrect';
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