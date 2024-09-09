<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/user.php';

session_start();

//Lit les informations
$login = [];
$login['pseudo'] = htmlspecialchars($_POST['pseudo']);
$login['password'] = htmlspecialchars($_POST['password']);

$_SESSION = [];
$_SESSION['msg']['info'] = [];
$_SESSION['msg']['error'] = [];

$dbConnection = getConnection($dbConfig);
$user = getUser($login['pseudo'], $dbConnection);
var_dump($user);

//Si ça marche pas
if ($user == null) {
    header('Location:' . '/ctrl/login/login-display.php');
    exit();
} else {
    $isPasswordOK = password_verify($login['password'], $user['password']);
    if (!$isPasswordOK) {
        header('Location:' . '/ctrl/login/login-display.php');
        // Ajoute un flash-message
        $_SESSION['msg']['error'][] = 'Identifiant ou Mot de passe incorrect';
        exit();
    }
    //Si ça marche
    $_SESSION['compte'] = $user;

    // Ajoute un flash-message
    $_SESSION['msg']['info'][] = 'Bienvenue';
}



//Redirection
header('Location:' . '/ctrl/welcome/welcome.php');
