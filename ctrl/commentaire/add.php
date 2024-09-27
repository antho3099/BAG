<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/commentaire.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/article.php';

session_start();

// Lis les informations depuis la requête HTTP
$commentaire = [];
$commentaire['commentaire'] = htmlspecialchars($_POST['commentaire']);
$commentaire['idUser'] = $_SESSION['compte']['id'];
$commentaire['idArticle'] = $article['id'];

$dbConnection = getConnection($dbConfig);
// $isSucces = create($jeu['titre'], $jeu['studio'], $jeu['sortie'], $jeu['genre'], $jeu['age'], $jeu['plateforme'], $jeu['prix'], $jeu['story'], $jeu['avis'], $jeu['note'], $jeu['critique'], $jeu['idUser'], $jeu['image_filename'], $dbConnection);
$isSucces = createCommentaire($commentaire['une'], $commentaire['idUser'], $commentaire['idArticle'], $dbConnection);
header('Location: ' . '/ctrl/article/article.php');
