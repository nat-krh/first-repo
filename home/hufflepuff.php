<?php
$id = 2;
$house = 'hufflepuff';
$title = 'Хаффлпафф';
require 'components/header.php';
?>

<?php
require 'components/left.php';
?>


        <div class="content">
            <div class="hello">
                <h1>Приветствуем Вас в гостинной факультета Хаффлпафф!</h1>
                <img src="hufflepuff/emblem.png" alt="Герб Хаффлпаффа">
                <p>Поздравляем! Я — староста факультета и я рад приветствовать вас на факультете Хаффлпафф. Наш герб — барсук, животное, которое часто недооценивают, так как он живет спокойно до тех пор, пока его не трогают. Однако барсук даст отпор животным намного крупнее себя.</p>
                <p>Ученики Хаффлпаффа надежные и верные. Мы не болтаем по пустякам, но поддержим вас в трудной ситуации. Поскольку наш герб барсук, мы будем защищать себя, наших друзей и семьи от кого бы то ни было. Нас не испугает никто. Наш факультет выпустил наименьшее количество тёмных волшебников.</p>
                <p>Ах, да, вход в гостиную Хаффлпаффа скрывается в куче больших бочек в укромном уголке по правой стороне коридора, ведущего на кухню. Постучите по второй бочке снизу в середине второго ряда в ритме «Хельги Хаффлпафф» и крышка распахнется. Только на нашем факультете имеется средство для предотвращения проникновения в гостиную потенциальных нарушителей. Если постучать по неправильной крышке, или неправильным будет ритм, нарушитель получит приличную порцию уксуса.</p>
                <p>Как только вы открыли бочку, проползайте внутрь и дальше по проходу позади нее. В итоге вы окажетесь в самой уютной гостиной Хогвартса. Это круглая, простая комната с низким потолком. В ней всегда чувствуется присутствие солнечного света, а из круглых окошек открывается вид на колышущуюся траву и одуванчики.</p>
                <p>Вы будете спать с комфортом. В наших спальнях мы защищены от бурь и спокойно можем отдохнуть. Мы никогда не нарушаем ночное спокойствие, как иногда делают ученики в некоторых других башнях.</p>
            </div>
            <?=require 'components/news.php'?>
        </div>

<?php require 'components/right.php'?>

<?php require 'components/footer.php'?>