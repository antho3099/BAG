<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/lib/article.php';

$dbConnection = getConnection($dbConfig);
$listArticle = getAll($dbConnection);

include $_SERVER['DOCUMENT_ROOT'] . '/view/sparking/sparkinggeek.php';
