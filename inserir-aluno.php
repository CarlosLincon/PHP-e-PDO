<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . './banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Carla linca',
    new \DateTimeImmutable('2001-11-30'));



// $sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name,:birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('d-m-Y'));

if ($statement->execute()) {
    echo "Aluno incluido";
}



