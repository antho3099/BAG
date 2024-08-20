<?php

//fonction GETALL
function getAll(PDO $db): array
{
    // Prépare la requête
    $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age,  jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser , jeu.image_filename AS image';
    $query .= ' FROM jeu';
    $query .= ' JOIN user ON jeu.idUser = user.id';
    $statement = $db->prepare($query);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    $listJeu = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $listJeu;
}

//fonction GET
function get($id, PDO $db): array
{
    // Prépare la requête
    $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser, jeu.image_filename AS image';
    $query .= ' FROM jeu';
    $query .= ' JOIN user ON jeu.idUser = user.id';
    $query .= ' WHERE jeu.id = :idJeu';
    $statement = $db->prepare($query);
    $statement->bindParam(':idJeu', $id);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    $jeu = $statement->fetch(PDO::FETCH_ASSOC);

    return $jeu;
}

function create(string $titre, string $studio, string $sortie, string $genre, string $age, string $plateforme, string $prix, string $story, string $avis, string $note, string $critique, string $idUser, string $filename, PDO $db): bool
{
    // Prépare la requête
    $query = 'INSERT INTO jeu (titre, studio, sortie, genre, age, plateforme, prix, story, avis, note, critique, idUser, image_filename) VALUES (:titre, :studio, :sortie, :genre, :age, :plateforme, :prix, :story, :avis, :note, :critique, :idUser, :image_filename)';
    $statement = $db->prepare($query);
    $statement->bindParam(':titre', $titre);
    $statement->bindParam(':studio', $studio);
    $statement->bindParam(':sortie', $sortie);
    $statement->bindParam(':genre', $genre);
    $statement->bindParam(':age', $age);
    $statement->bindParam(':plateforme', $plateforme);
    $statement->bindParam(':prix', $prix);
    $statement->bindParam(':story', $story);
    $statement->bindParam(':avis', $avis);
    $statement->bindParam(':note', $note);
    $statement->bindParam(':critique', $critique);
    $statement->bindParam(':idUser', $idUser);
    $statement->bindParam(':image_filename', $filename);


    // Exécute la requête
    $successOrFailure = $statement->execute();
    return $successOrFailure;
}

function delete($id, PDO $db): bool
{
    // Prépare la requête
    $query = 'DELETE';
    $query .= ' FROM jeu ';
    $query .= ' WHERE jeu.id = :idJeu';
    $statement = $db->prepare($query);
    $statement->bindParam(':idJeu', $id);

    // Exécute la requête
    $successOrFailure = $statement->execute();

    return $successOrFailure;
}
