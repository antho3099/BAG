<?php

// Modifier un Marin > Affiche le formulaire

// Définit les clés de dictionnaire de la page
$pageTitle = 'Modifier un article';

// Lis les informations depuis la requête HTTP (id du Marin)
$idArticle = $_GET['id'];

// Charge le Marin depuis la base de données

// - Ouvre une connexion à la BDD
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT article.id, article.une, article.paragraph, article.minititle, article.paragraphtwo, article.minititletwo, article.paragraphthree, article.date';
$query .= ' FROM article';
$query .= ' WHERE article.id = :idArticle';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idArticle', $idArticle);

// - Exécute la requête
$successOrFailure = $statement->execute();
$article = $statement->fetch(PDO::FETCH_ASSOC);

// Rends la vue
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/sparking/article/update.php';
