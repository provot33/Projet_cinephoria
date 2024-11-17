<?php
function getCinemaImage(string|null $image)
{
    if ($image === null) {
        return _ASSETS_IMG_CINE_PATH_ .'film_defaut.jpg';
    } else {
        return _CINEMA_IMG_PATH_ . $image;
    }
}
function getCinemaById(PDO $pdo, int $id)
{
    $query = $pdo->prepare("SELECT * FROM CINEMA WHERE ID_CINEMA = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}