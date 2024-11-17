<?php

function addUser(PDO $pdo, string $NOM, string $PRENOM, string $NOM_UTILISATEUR, string $MOT_DE_PASSE, string $ADRESSE_ELECTRONIQUE)
{
    $sql = "INSERT INTO UTILISATEUR (NOM, PRENOM, NOM_UTILISATEUR, MOT_DE_PASSE, ADRESSE_ELECTRONIQUE) 
    VALUES (:NOM, :PRENOM, :NOM_UTILISATEUR, :MOT_DE_PASSE, :ADRESSE_ELECTRONIQUE);";
    $query = $pdo->prepare($sql);
    $password = password_hash($MOT_DE_PASSE, PASSWORD_DEFAULT);
    $query->bindParam(':NOM', $NOM, PDO::PARAM_STR);
    $query->bindParam(':PRENOM', $PRENOM, PDO::PARAM_STR);
    $query->bindParam(':NOM_UTILISATEUR', $NOM_UTILISATEUR, PDO::PARAM_STR);
    $query->bindParam(':MOT_DE_PASSE', $password, PDO::PARAM_STR);
    $query->bindParam(':ADRESSE_ELECTRONIQUE', $ADRESSE_ELECTRONIQUE, PDO::PARAM_STR);
    return $query->execute();
}

function verifyUserLoginPassword (PDO $pdo, string $ADRESSE_ELECTRONIQUE, string  $MOT_DE_PASSE ) {
    $query = $pdo->prepare("SELECT * FROM UTILISATEUR WHERE ADRESSE_ELECTRONIQUE = :ADRESSE_ELECTRONIQUE");
    $query->bindParam(':ADRESSE_ELECTRONIQUE', $ADRESSE_ELECTRONIQUE, PDO::PARAM_STR );
    $query->execute();
    $user= $query->fetch();

    $query = $pdo->prepare("SELECT PASSWORD(:MOT_DE_PASSE) AS PASSCRYPT FROM DUAL");
    $query->bindParam(':MOT_DE_PASSE',$MOT_DE_PASSE , PDO::PARAM_STR );
    $query->execute();
    $passcrypt= $query->fetch();
    if ($user && $user['MOT_DE_PASSE'] === $passcrypt['PASSCRYPT']) {
        return $user;
        } else {
            return false;
        }
}
