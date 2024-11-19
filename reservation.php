<?php
require_once('template/header.php');
?>

<main>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <fieldset>
            <legend>
                <h1>Liste de nos cinemas</h1>
            </legend>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Sélectionnez votre cinema</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected>selectionner la séance</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="submit">Envoyer</button>
        </fieldset></a>
        </section>
</main>
<?php
require_once('template\footer.php');
?>