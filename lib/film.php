<?php

function getFilmById(PDO $pdo, int $id)
{
    $query = $pdo->prepare("SELECT * FROM FILM WHERE ID_FILM = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getFilmImage(string|null $image)
{
    if ($image === null) {
        return _ASSETS_IMG_PATH_ . 'recipe_default.jpg';
    } else {
        return _FILMS_IMG_PATH_ . $image;
    }
}

function getFilms(PDO $pdo, int $limit = null)
{
    $sql = 'SELECT * FROM FILM ORDER BY ID_FILM';
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

function saveFilm(PDO $pdo, string $NOM, string $DESCRIPTION, INT $AGE_MINIMUM, INT $SCORE, string $LABEL, string|null $URL_AFFICHE,)
{
    $sql = "INSERT INTO FILM (NOM, DESCRIPTION, AGE_MINIMUM, SCORE, LABEL, URL_AFFICHE) 
        VALUES (:NOM, :DESCRIPTION, :AGE_MINIMUM, :SCORE, :LABEL, :URL_AFFICHE);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':NOM', $NOM, PDO::PARAM_STR);
    $query->bindParam(':DESCRIPTION', $DESCRIPTION, PDO::PARAM_STR);
    $query->bindParam(':AGE_MINIMUM', $AGE_MINIMUM, PDO::PARAM_INT);
    $query->bindParam(':SCORE', $SCORE, PDO::PARAM_INT);
    $query->bindParam(':LABEL', $LABEL, PDO::PARAM_STR);
    $query->bindParam(':URL_AFFICHE', $URL_AFFICHE, PDO::PARAM_STR);
    return $query->execute();
}
