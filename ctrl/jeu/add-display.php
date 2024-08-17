<?php
session_start();

// Ouvre une connexion à la Base de données
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// Prépare la requête
$query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique';
$query .= ' FROM jeu';
$statement = $dbConnection->prepare($query);

// Exécute la requête
$successOrFailure = $statement->execute();
$listService = $statement->fetchAll(PDO::FETCH_ASSOC);


require_once $_SERVER['DOCUMENT_ROOT'] . '/view/jeu/add.php';
