<?php
session_start();


// Ouvre une connexion à la Base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/jeu.php';

$dbConnection = getConnection($dbConfig);
$id = htmlspecialchars($_GET['id']);
$jeu = get($id, $dbConnection);

if ($jeu['age'] == 18){
    

}

include $_SERVER['DOCUMENT_ROOT'] . '/view/jeu/jeu.php';
