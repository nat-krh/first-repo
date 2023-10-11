<?php
//require '../models/DBConnect.php';
//
//$pdo = DBConnect::getConnection();

$query = "SELECT id, name, description, img
          FROM dean;";

$statement = $pdo->query($query);

$dean = $statement->fetchAll();

foreach ($dean as $el);


//print_r($dean[$id]);

?>



    <div class="person">
        <div class="dean">
            <h2>Декан факультета <?=$dean[$id]['name']?></h2>
            <img src="<?=$dean[$id]['img']?>" alt="Декан факультета <?=$dean[$id]['name']?>">
            <?=$dean[$id]['description']?>
        </div>
    </div>
<!--</div>-->

