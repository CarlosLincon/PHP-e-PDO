<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . './banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1, 7, PDO::PARAM_INT);


$preparedStatement->bindValue(1, 8, PDO::PARAM_INT);
$preparedStatement->execute();