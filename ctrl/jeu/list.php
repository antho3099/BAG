<?php
session_start();
// Ouvre une connexion à la Base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/jeu.php';


$dbConnection = getConnection($dbConfig);
$listJeu = getAll($dbConnection);

// Rends la vue
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/jeu/list.php';
