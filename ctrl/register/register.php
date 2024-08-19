<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/user.php';

session_start();

//Lit les informations
$register = [];
$register['nom'] = htmlspecialchars($_POST['nom']);
$register['prenom'] = htmlspecialchars($_POST['prenom']);
$register['email'] = htmlspecialchars($_POST['email']);
$register['pseudo'] = htmlspecialchars($_POST['pseudo']);
$register['password'] = htmlspecialchars($_POST['password']);

$_SESSION = [];
$_SESSION['msg']['info'] = [];
$_SESSION['msg']['error'] = [];

$passwordHash  =  password_hash($register['password'], PASSWORD_DEFAULT);
var_dump($passwordHash);
$dbConnection = getConnection($dbConfig);
$isSucces = insertUser($register['nom'], $register['prenom'], $register['email'], $register['pseudo'], $passwordHash, $dbConnection);

// Ajoute un flash-message
$_SESSION['msg']['info'][] = 'Le compte a été créé.';

if (!$isSucces) {
    header('Location:' . '/ctrl/register/register-display.php');
    exit();
}
header('Location:' . '/ctrl/login/login-display.php');
