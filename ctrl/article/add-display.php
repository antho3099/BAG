<?php
session_start();

// Ouvre une connexion à la Base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// Prépare la requête
$query = 'SELECT article.id, article.une, article.paragraph, article.minititle, article.minititletwo, article.paragraphtwo, article.paragraphthree, article.date';
$query .= ' FROM article';
$statement = $dbConnection->prepare($query);

// Exécute la requête
$successOrFailure = $statement->execute();
$listService = $statement->fetchAll(PDO::FETCH_ASSOC);

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/sparking/article/add.php';
