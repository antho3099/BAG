<?php

//fonction GETALL
function getAll(PDO $db): array
{
    // Prépare la requête
    $query = 'SELECT article.id, article.une, article.paragraph, article.minititle, article.paragraphtwo, article.minititletwo,  article.paragraphthree, article.date, user.pseudo AS pseudoUser , article.picture_filename AS picture, article.picturetwo_filename AS picturetwo, article.picturethree_filename AS picturethree';
    $query .= ' FROM article';
    $query .= ' JOIN user ON article.idUser = user.id';
    $statement = $db->prepare($query);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    $listArticle = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $listArticle;
}

//fonction GET
function get($id, PDO $db): array
{
    // Prépare la requête
    // $query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique, user.pseudo AS pseudoUser, jeu.image_filename AS image';
    $query = 'SELECT article.id, article.une, article.paragraph, article.minititle, article.paragraphtwo, article.minititletwo,  article.paragraphthree, article.date, user.pseudo AS pseudoUser , article.picture_filename AS picture, article.picturetwo_filename AS picturetwo, article.picturethree_filename AS picturethree';
    $query .= ' FROM article';
    $query .= ' JOIN user ON article.idUser = user.id';
    $query .= ' WHERE article.id = :idArticle';
    $statement = $db->prepare($query);
    $statement->bindParam(':idArticle', $id);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    $article = $statement->fetch(PDO::FETCH_ASSOC);

    return $article;
}
// function create(string $titre, string $studio, string $sortie, string $genre, string $age, string $plateforme, string $prix, string $story, string $avis, string $note, string $critique, string $idUser, string $filename, PDO $db): bool
function createArticle(string $une, string $paragraph, string $minititle, string $paragraphtwo, string $minititletwo, string $paragraphthree, string $date, string $idUser, string $picture, string $picturetwo, string $picturethree, PDO $db): bool
{
    // Prépare la requête
    // $query = 'INSERT INTO jeu (titre, studio, sortie, genre, age, plateforme, prix, story, avis, note, critique, idUser, image_filename) VALUES (:titre, :studio, :sortie, :genre, :age, :plateforme, :prix, :story, :avis, :note, :critique, :idUser, :image_filename)';
    $query = 'INSERT INTO article (une, paragraph, minititle, paragraphtwo, minititletwo, paragraphthree, date, idUser, picture_filename, picturetwo_filename, picturethree_filename) VALUES (:une, :paragraph, :minititle, :paragraphtwo, :minititletwo, :paragraphthree, :date, :idUser, :picture_filename, :picturetwo_filename, :picturethree_filename)';
    $statement = $db->prepare($query);
    $statement->bindParam(':une', $une);
    $statement->bindParam(':paragraph', $paragraph);
    $statement->bindParam(':minititle', $minititle);
    $statement->bindParam(':paragraphtwo', $paragraphtwo);
    $statement->bindParam(':minititletwo', $minititletwo);
    $statement->bindParam(':paragraphthree', $paragraphthree);
    $statement->bindParam(':date', $date);
    $statement->bindParam(':idUser', $idUser);
    $statement->bindParam(':picture_filename', $picture);
    $statement->bindParam(':picturetwo_filename', $picturetwo);
    $statement->bindParam(':picturethree_filename', $picturethree);

    // Exécute la requête
    $successOrFailure = $statement->execute();
    return $successOrFailure;
}

function delete($id, PDO $db): bool
{
    // Prépare la requête
    $query = 'DELETE';
    $query .= ' FROM article ';
    $query .= ' WHERE article.id = :idArticle';
    $statement = $db->prepare($query);
    $statement->bindParam(':idArticle', $id);

    // Exécute la requête
    $successOrFailure = $statement->execute();

    return $successOrFailure;
}
function updateArticle(string $id, string $une, string $paragraph, string $minititle, string $paragraphtwo, string $minititletwo, string $paragraphthree, string $date, PDO $db): bool
{
    // Prépare la requête
    $query = '';
    $query .= ' UPDATE article';
    $query .= ' SET';
    $query .= ' article.une = :une';
    $query .= ' ,article.paragraph = :paragraph';
    $query .= ' ,article.minititle = :minititle';
    $query .= ' ,article.paragraphtwo = :paragraphtwo';
    $query .= ' ,article.minititletwo = :minititletwo';
    $query .= ' ,article.paragraphthree = :paragraphthree';
    $query .= ' ,article.date = :date';
    $query .= ' WHERE article.id = :idArticle';
    $statement = $db->prepare($query);
    $statement->bindParam(':une', $une);
    $statement->bindParam(':paragraph', $paragraph);
    $statement->bindParam(':minititle', $minititle);
    $statement->bindParam(':paragraphtwo', $paragraphtwo);
    $statement->bindParam(':minititletwo', $minititletwo);
    $statement->bindParam(':paragraphthree', $paragraphthree);
    $statement->bindParam(':date', $date);
    $statement->bindParam(':idArticle', $id);

    // Exécute la requête
    $successOrFailure = $statement->execute();

    return $successOrFailure;
}
