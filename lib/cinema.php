<?php

function getCinemaById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM CINEMA WHERE ID_CINEMA = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}  

function getCinemaImage(string|null $image)
{
    if ($image === null) {
        return _ASSETS_IMG_CINE_PATH_ .'cinema_defaut.jpg';
    } else {
        return _CINEMA_IMG_PATH_. $image;
    }
}


function getCinemas(PDO $pdo, int $limit = null)
{
    $sql = 'SELECT * FROM CINEMA ORDER BY ID_CINEMA';
    if ($limit) {
        $sql .= ' LIMIT :limit';
    }
    $query = $pdo->prepare($sql);
    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }
    $query->execute();
    return $query->fetchAll();
}
