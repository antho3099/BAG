<?php

// Lit le chemin de l'URL demandée
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

// Référence toutes les routes de l'application
$routes = [];

// - page d'accueil
$routes['/'] = '/ctrl/welcome/welcome.php';

// - autres routes
$routes['/gaming/jeux'] = '/ctrl/gaming/gaming.php';
$routes['/gaming/jeu'] = '/ctrl/jeu/jeu.php';


// Cherche la route demandée
$route = $routes[$url];

// Redirige éventuellement l'Utilisateur vers une page d'erreur 404 personnalisée
// quand la route demandée n'est pas référencée
// WARN ça manque de log...
if (!isset($route)) {

    $target = $_SERVER['DOCUMENT_ROOT'] . '/view/_error/404.php';
    include($target);
    exit();
}

// Interprête/exécute le code du controller ciblé
$target = $_SERVER['DOCUMENT_ROOT'] . $route;
include($target);
