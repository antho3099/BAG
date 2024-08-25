<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/jeu.php';

session_start();

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

const MY_IMG_PNG = 'image/png';
const MY_IMG_JPG = 'image/jpeg';
const LIST_ACCEPTED_FILE_TYPE = [MY_IMG_PNG, MY_IMG_JPG];
const FILE_MAX_SIZE = 10;

// Lis les informations saisies dans le formulaire
$fileName = $_FILES['picture']['name'];
$fileSize = $_FILES['picture']['size'];
$fileTmpName  = $_FILES['picture']['tmp_name'];
$fileType = $_FILES['picture']['type'];

// Copie aussi le fichier dans un répertoire
$uploadPath = $uploadDirectory . basename($fileName);
$didUpload = move_uploaded_file($fileTmpName, $uploadPath);

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/screenshot/';

// Lis les informations saisies dans le formulaire
$screenName = $_FILES['screenshot']['name'];
$screenSize = $_FILES['screenshot']['size'];
$screenTmpName  = $_FILES['screenshot']['tmp_name'];
$screenType = $_FILES['screenshot']['type'];

// Copie aussi le fichier dans un répertoire
$uploadPath = $uploadDirectory . basename($screenName);
$didUpload2 = move_uploaded_file($screenTmpName, $uploadPath);

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/screengame/';

// Lis les informations saisies dans le formulaire
$screentwoName = $_FILES['screen']['name'];
$screentwoSize = $_FILES['screen']['size'];
$screentwoTmpName  = $_FILES['screen']['tmp_name'];
$screentwoType = $_FILES['screen']['type'];

// Copie aussi le fichier dans un répertoire
$uploadPath = $uploadDirectory . basename($screentwoName);
$didUpload3 = move_uploaded_file($screentwoTmpName, $uploadPath);

// // Lis les informations depuis la requête HTTP
// $jeu = [];
// $jeu['titre'] = htmlspecialchars($_POST['titre']);
// $jeu['studio'] = htmlspecialchars($_POST['studio']);
// $jeu['sortie'] = htmlspecialchars($_POST['sortie']);
// $jeu['genre'] = htmlspecialchars($_POST['genre']);
// $jeu['age'] = htmlspecialchars($_POST['age']);
// $jeu['plateforme'] = htmlspecialchars($_POST['plateforme']);
// $jeu['prix'] = htmlspecialchars($_POST['prix']);
// $jeu['story'] = htmlspecialchars($_POST['story']);
// $jeu['avis'] = htmlspecialchars($_POST['avis']);
// $jeu['note'] = htmlspecialchars($_POST['note']);
// $jeu['critique'] = htmlspecialchars($_POST['critique']);
// $jeu['idUser'] = $_SESSION['compte']['id'];
// $jeu['image_filename'] = $fileName;


// Lis les informations depuis la requête HTTP
$jeu = [];
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
$jeu['idUser'] = $_SESSION['compte']['id'];
$jeu['image_filename'] = $fileName;
$jeu['screenshot_filename'] = $screenName;
$jeu['screen_filename'] = $screentwoName;


$dbConnection = getConnection($dbConfig);
// $isSucces = create($jeu['titre'], $jeu['studio'], $jeu['sortie'], $jeu['genre'], $jeu['age'], $jeu['plateforme'], $jeu['prix'], $jeu['story'], $jeu['avis'], $jeu['note'], $jeu['critique'], $jeu['idUser'], $jeu['image_filename'], $dbConnection);
$isSucces = create($jeu['titre'], $jeu['studio'], $jeu['sortie'], $jeu['genre'], $jeu['age'], $jeu['plateforme'], $jeu['prix'], $jeu['story'], $jeu['avis'], $jeu['note'], $jeu['critique'], $jeu['idUser'], $jeu['image_filename'], $jeu['screenshot_filename'], $jeu['screen_filename'], $dbConnection);

header('Location: ' . '/ctrl/gaming/gaming.php');
