
    <?php
require_once('template/header.php');
require_once('lib/cinema.php');

$cinemas= getCinemaById ($pdo);

?>    
    
    <main>

        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <h1>Liste des cinemas</h1>
        </div>
        <div class='row'>
            <?php
            foreach ($cinemas as $key => $cinema) {
                include 'template/cinema_partial.php';
            } ?>
        </div>
    </main>
<?php
require_once ('template\footer.php');
?>
    