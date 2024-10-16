<?php

// Modifier un Marin > Affiche le formulaire

// Définit les clés de dictionnaire de la page
$pageTitle = 'Modifier un Jeu';

// Lis les informations depuis la requête HTTP (id du Marin)
$idJeu = $_GET['id'];

// Charge le Marin depuis la base de données

// - Ouvre une connexion à la BDD
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
$dbConnection = getConnection($dbConfig);

// - Prépare la requête
$query = 'SELECT jeu.id, jeu.titre, jeu.studio, jeu.sortie, jeu.genre, jeu.age, jeu.plateforme, jeu.prix, jeu.story, jeu.avis, jeu.note, jeu.critique';
$query .= ' FROM jeu';
$query .= ' WHERE jeu.id = :idJeu';
$statement = $dbConnection->prepare($query);
$statement->bindParam(':idJeu', $idJeu);

// - Exécute la requête
$successOrFailure = $statement->execute();
$jeu = $statement->fetch(PDO::FETCH_ASSOC);

// Rends la vue
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/jeu/update.php';
