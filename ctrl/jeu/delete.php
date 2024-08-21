<?php
session_start();

// Ouvre une connexion à la Base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/jeu.php';
// Lis les informations depuis la requête HTTP
$idJeu =  htmlspecialchars($_GET['id']);


// Exécute la requête
$dbConnection = getConnection($dbConfig);
$isSucces = delete($idJeu, $dbConnection);


header('Location: ' . '/view/welcome/welcome.php');
