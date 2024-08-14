<?php
session_start();

// détruit toutes les variables de session
$_SESSION = [];

// Rediriger vers la page d'accueil
header('Location: /ctrl/welcome/welcome.php');
