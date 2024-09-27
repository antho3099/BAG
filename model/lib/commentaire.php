<?php

//fonction GETALL
function getAll(PDO $db): array
{
    // Prépare la requête
    $query = 'SELECT commentaire.id, commentaire.commentaire, commentaire.idArticle, user.pseudo AS pseudoUser';
    $query .= ' FROM commentaire';
    $query .= ' JOIN user ON commentaire.idUser = user.id';
    $query .= ' JOIN article ON commentaire.idArticle = article.id';
    $statement = $db->prepare($query);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    $listCommentaire = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $listCommentaire;
}
//fonction GET
function get($id, PDO $db): array
{
    // Prépare la requête
    // $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser, jeu.image_filename AS image';
    $query = 'SELECT commentaire.id, commentaire.commentaire, commentaire.idArticle, user.pseudo AS pseudoUser ';
    $query .= ' FROM commentaire';
    $query .= ' JOIN user ON commentaire.idUser = user.id';
    $query .= ' JOIN article ON commentaire.idArticle = article.id';
    $query .= ' WHERE commentaire.id = :idCommentaire';
    $statement = $db->prepare($query);
    $statement->bindParam(':idCommentaire', $id);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    $commentaire = $statement->fetch(PDO::FETCH_ASSOC);

    return $commentaire;
}
function createCommentaire(string $commentaire, string $idUser, string $idArticle, PDO $db): bool
{
    // Prépare la requête
    $query = 'INSERT INTO commentaire (commentaire, idUser, idArticle) VALUES (:commentaire, :idUser, :idArticle)';
    $statement = $db->prepare($query);
    $statement->bindParam(':commentaire', $commentaire);
    $statement->bindParam(':idUser', $idUser);
    $statement->bindParam(':idArticle', $idArticle);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    return $successOrFailure;
}
