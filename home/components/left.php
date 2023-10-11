<?php
//require '../models/DBConnect.php';
//
//$pdo = DBConnect::getConnection();

$query = "SELECT id, name, description, img
          FROM founder;";

$statement = $pdo->query($query);

$founder = $statement->fetchAll();

foreach ($founder as $el);


//print_r($founder[$id]['name']);
?>


<!--<div class="house">-->
    <div class="person">
        <div class="founder">
            <h2>Основатель факультета <?=$founder[$id]['name']?></h2>
            <img src="<?=$founder[$id]['img']?>" alt="Основатель факультета <?=$founder[$id]['name']?>">
            <?=$founder[$id]['description']?>
        </div>
    </div>