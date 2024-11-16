<?php
require_once('template\header.php');
require_once('lib\film.php');

$films= getFilms ($pdo);

?>    
    
    <main>

        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <h1>Liste des films</h1>
        </div>
        <div class='row'>
            <?php
            foreach ($films as $key => $film) {
                include 'template\film_partial.php';
            } ?>
        </div>
    </main>
<?php
require_once ('template\footer.php');
?>