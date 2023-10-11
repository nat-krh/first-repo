<?php

$query = "SELECT id, category, title, text, img
          FROM news
          WHERE category = '$title'
          GROUP BY category, id, title, text, img";

$statement = $pdo->query($query);

$news = $statement->fetchAll();

foreach ($news as $el);

?>

<div class="news">
    <h2>Объявления:</h2>
    <div class="newsOne">
        <h2><?=$news[0]['title']?></h2>
        <p><?=$news[0]['text']?></p>
        <img src="<?=$news[0]['img']?>" alt="">
    </div>
</div>