<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/db.php';

session_start();
$pageTitle = 'Profil';

$db = getConnection($dbConfig);
$query = 'SELECT * FROM user WHERE id = ' . $_GET['id'];
$statement = $db->prepare($query);
$successOrFailure = $statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
