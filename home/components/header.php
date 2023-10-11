<?php


require '../models/DBConnect.php';

$pdo = DBConnect::getConnection();

//$query = "SELECT id, name, description
//          FROM founder;";
//
//$statement = $pdo->query($query);
//
//$founder = $statement->fetchAll();
//
//foreach ($founder as $el);


//print_r($founder[$id]['name']);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="icon" href="<?=$house?>/icon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?=$house?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header">
        <a href="hogwarts-controller.php">Хогвартс</a>
        <a href="gryffindor-controller.php">Гриффиндор</a>
        <a href="slytherin-controller.php">Слизерин</a>
        <a href="hufflepuff-controller.php">Хаффлпафф</a>
        <a href="ravenclaw-controller.php">Ровенкло</a>
    </div>
</header>
<div class="button">
    <button><a href="/core/exit.php" class="exit">Выход</a></button>
</div>

<?php
if(!isset($_SESSION))session_start();

print_r($_SESSION)?>

<div class="house">