<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/jeu.php';

// Modifie un Marin

// Lis les informations depuis la requête HTTP
$jeu = [];
$jeu['id'] = htmlspecialchars($_POST['id']);
$jeu['titre'] = htmlspecialchars($_POST['titre']);
$jeu['studio'] = htmlspecialchars($_POST['studio']);
$jeu['sortie'] = htmlspecialchars($_POST['sortie']);
$jeu['genre'] = htmlspecialchars($_POST['genre']);
$jeu['age'] = htmlspecialchars($_POST['age']);
$jeu['plateforme'] = htmlspecialchars($_POST['plateforme']);
$jeu['prix'] = htmlspecialchars($_POST['prix']);
$jeu['story'] = htmlspecialchars($_POST['story']);
$jeu['avis'] = htmlspecialchars($_POST['avis']);
$jeu['note'] = htmlspecialchars($_POST['note']);
$jeu['critique'] = htmlspecialchars($_POST['critique']);

// Exécute la requête
$dbConnection = getConnection($dbConfig);
$isSucces = update($jeu['id'], $jeu['titre'], $jeu['studio'], $jeu['sortie'], $jeu['genre'], $jeu['age'], $jeu['plateforme'], $jeu['prix'], $jeu['story'], $jeu['avis'], $jeu['note'], $jeu['critique'], $dbConnection);

// Redirige vers la liste des Jeux
header('Location: ' . '/ctrl/jeu/list.php');
