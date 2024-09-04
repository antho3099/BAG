<?php
session_start();

// Ouvre une connexion à la Base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/article.php';

$dbConnection = getConnection($dbConfig);
$id = htmlspecialchars($_GET['id']);
$article = get($id, $dbConnection);


include $_SERVER['DOCUMENT_ROOT'] . '/view/sparking/article/article.php';
