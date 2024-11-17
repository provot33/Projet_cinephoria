<?php
require_once('template\header.php');
?>
<main>
    <h1>Contacter</h1>

    <form method="post" enctype="multipart/form-data" name="">
        <div class="mb-3">
            <label for="NOM_UTILISATEUR" class="form label">Nom utilisateur</label>
            <input type="text" name="NOM_UTILISATEUR" id="NOM_UTILISATEUR" class="form control">
        </div>

        <div class="mb-3">
            <label for="MOT_DE_PASSE" class="form label">Titre de la demande</label>
            <input type="text" name="MOT_DE_PASSE" id="MOT_DE_PASSE" class="form control">
        </div>

        <div class="mb-3">
            <label for="DESCRIPTION" class="form-label">Description</label>
            <textarea name="DESCRIPTION" id="DESCRIPTION" cols="20" rows="3" class="form-control"></textarea>
        </div>

        <input type="submit" value="Soumettre" name="addUser" class="btn btn-primary">
    </form>
</main>
<?php
require_once('template\footer.php');
?>