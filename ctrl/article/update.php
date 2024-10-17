<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/article.php';

// Modifie un Marin

// Lis les informations depuis la requête HTTP
$article = [];
$article['id'] = htmlspecialchars($_POST['id']);
$article['une'] = htmlspecialchars($_POST['une']);
$article['paragraph'] = htmlspecialchars($_POST['paragraph']);
$article['minititle'] = htmlspecialchars($_POST['minititle']);
$article['paragraphtwo'] = htmlspecialchars($_POST['paragraphtwo']);
$article['minititletwo'] = htmlspecialchars($_POST['minititletwo']);
$article['paragraphthree'] = htmlspecialchars($_POST['paragraphthree']);
$article['date'] = htmlspecialchars($_POST['date']);

// Exécute la requête
$dbConnection = getConnection($dbConfig);
$isSucces = updateArticle($article['id'], $article['une'], $article['paragraph'], $article['minititle'], $article['paragraphtwo'], $article['minititletwo'], $article['paragraphthree'], $article['date'], $dbConnection);

// Redirige vers la liste des Jeux
header('Location: ' . '/ctrl/article/list.php');
