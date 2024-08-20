<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/db.php';

session_start();

$pageTitle = 'Liste des profils';

$db = getConnection($dbConfig);
$query = 'SELECT * FROM user';
$statement = $db->prepare($query);
$successOrFailure = $statement->execute();
$listUser = $statement->fetchAll(PDO::FETCH_ASSOC);

include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/footer.php';
