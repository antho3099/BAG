<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/article.php';

session_start();

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/articlegallery/';

const MY_IMG_PNG = 'image/png';
const MY_IMG_JPG = 'image/jpeg';
const LIST_ACCEPTED_FILE_TYPE = [MY_IMG_PNG, MY_IMG_JPG];
const FILE_MAX_SIZE = 10;

// Lis les informations saisies dans le formulaire
$pictureName = $_FILES['pic']['name'];
$pictureSize = $_FILES['pic']['size'];
$pictureTmpName  = $_FILES['pic']['tmp_name'];
$pictureType = $_FILES['pic']['type'];

// Copie aussi le fichier dans un répertoire
$uploadPath = $uploadDirectory . basename($pictureName);
$didUpload10 = move_uploaded_file($pictureTmpName, $uploadPath);

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/picturetwo/';

// Lis les informations saisies dans le formulaire
$picturetwoName = $_FILES['picturetwo']['name'];
$picturetwoSize = $_FILES['picturetwo']['size'];
$picturetwoTmpName  = $_FILES['picturetwo']['tmp_name'];
$picturetwoType = $_FILES['picturetwo']['type'];

// Copie aussi le fichier dans un répertoire
$uploadPath = $uploadDirectory . basename($picturetwoName);
$didUpload11 = move_uploaded_file($picturetwoTmpName, $uploadPath);

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/picturethree/';

// Lis les informations saisies dans le formulaire
$picturethreeName = $_FILES['picturethree']['name'];
$picturethreeSize = $_FILES['picturethree']['size'];
$picturethreeTmpName  = $_FILES['picturethree']['tmp_name'];
$picturethreeType = $_FILES['picturethree']['type'];

// Copie aussi le fichier dans un répertoire
$uploadPath = $uploadDirectory . basename($picturethreeName);
$didUpload12 = move_uploaded_file($picturethreeTmpName, $uploadPath);

// Lis les informations depuis la requête HTTP
$article = [];
$article['une'] = htmlspecialchars($_POST['une']);
$article['paragraph'] = htmlspecialchars($_POST['paragraph']);
$article['minititle'] = htmlspecialchars($_POST['minititle']);
$article['paragraphtwo'] = htmlspecialchars($_POST['paragraphtwo']);
$article['minititletwo'] = htmlspecialchars($_POST['minititletwo']);
$article['paragraphthree'] = htmlspecialchars($_POST['paragraphthree']);
$article['date'] = htmlspecialchars($_POST['date']);
$article['idUser'] = $_SESSION['compte']['id'];
$article['picture_filename'] = $pictureName;
$article['picturetwo_filename'] = $picturetwoName;
$article['picturethree_filename'] = $picturethreeName;

$dbConnection = getConnection($dbConfig);
// $isSucces = create($jeu['titre'], $jeu['studio'], $jeu['sortie'], $jeu['genre'], $jeu['age'], $jeu['plateforme'], $jeu['prix'], $jeu['story'], $jeu['avis'], $jeu['note'], $jeu['critique'], $jeu['idUser'], $jeu['image_filename'], $dbConnection);
$isSucces = createArticle($article['une'], $article['paragraph'], $article['minititle'], $article['paragraphtwo'], $article['minititletwo'], $article['paragraphthree'], $article['date'], $article['idUser'], $article['picture_filename'], $article['picturetwo_filename'], $article['picturethree_filename'], $dbConnection);
header('Location: ' . '/ctrl/sparking/sparkinggeek.php');
