<?php
//fonction GetUser

function getUser(string $pseudo, PDO $db): ?array
{
    // - Prépare la requête
    $query = 'SELECT user.id, user.pseudo, user.password, user.idRole';
    $query .= ' FROM user';
    $query .= ' WHERE user.pseudo = :pseudo';
    $statement = $db->prepare($query);
    $statement->bindParam(':pseudo', $pseudo);

    // - Exécute la requête
    $successOrFailure = $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user == false) {
        $user = null;
    }
    return $user;
}
function insertUser(string $nom, string $prenom, string $birth, string $email, string $pseudo, string $password, PDO $db): bool
{

    $idRoleUtilisateur = 2;

    // Prépare la requête
    $query = 'INSERT INTO user (nom, prenom, birth, email, pseudo, password, idRole) VALUES (:nom, :prenom, :birth, :email, :pseudo ,:password, :idRole)';
    $statement = $db->prepare($query);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':prenom', $prenom);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':birth', $birth);
    $statement->bindParam(':pseudo', $pseudo);
    $statement->bindParam(':password', $password);
    $statement->bindParam(':idRole', $idRoleUtilisateur);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    return $successOrFailure;
}
