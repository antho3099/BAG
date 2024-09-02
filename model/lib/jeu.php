<?php

//fonction GETALL
function getAll(PDO $db): array
{
    // Prépare la requête
    // $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age,  jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser , jeu.image_filename AS image';
    $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age,  jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser , jeu.image_filename AS image, jeu.screenshot_filename AS screenshot, jeu.screen_filename AS screen, jeu.diapo_filename AS diapo, jeu.diapotwo_filename AS diapotwo, jeu.diapothree_filename AS diapothree, jeu.diapofour_filename AS diapofour';
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
    // $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser, jeu.image_filename AS image';
    $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser, jeu.image_filename AS image, jeu.screenshot_filename AS screenshot, jeu.screen_filename AS screen, jeu.diapo_filename AS diapo, jeu.diapotwo_filename AS diapotwo, jeu.diapothree_filename AS diapothree, jeu.diapofour_filename AS diapofour';
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

// function create(string $titre, string $studio, string $sortie, string $genre, string $age, string $plateforme, string $prix, string $story, string $avis, string $note, string $critique, string $idUser, string $filename, PDO $db): bool
function create(string $titre, string $studio, string $sortie, string $genre, string $age, string $plateforme, string $prix, string $story, string $avis, string $note, string $critique, string $idUser, string $filename, string $screenshot, string $screen, string $diapo, string $diapotwo, string $diapothree, string $diapofour, PDO $db): bool
{
    // Prépare la requête
    // $query = 'INSERT INTO jeu (titre, studio, sortie, genre, age, plateforme, prix, story, avis, note, critique, idUser, image_filename) VALUES (:titre, :studio, :sortie, :genre, :age, :plateforme, :prix, :story, :avis, :note, :critique, :idUser, :image_filename)';
    $query = 'INSERT INTO jeu (titre, studio, sortie, genre, age, plateforme, prix, story, avis, note, critique, idUser, image_filename, screenshot_filename, screen_filename, diapo_filename, diapotwo_filename, diapothree_filename, diapofour_filename) VALUES (:titre, :studio, :sortie, :genre, :age, :plateforme, :prix, :story, :avis, :note, :critique, :idUser, :image_filename, :screenshot_filename, :screen_filename, :diapo_filename, :diapotwo_filename, :diapothree_filename, :diapofour_filename)';
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
    $statement->bindParam(':screenshot_filename', $screenshot);
    $statement->bindParam(':screen_filename', $screen);
    $statement->bindParam(':diapo_filename', $diapo);
    $statement->bindParam(':diapotwo_filename', $diapotwo);
    $statement->bindParam(':diapothree_filename', $diapothree);
    $statement->bindParam(':diapofour_filename', $diapofour);


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
