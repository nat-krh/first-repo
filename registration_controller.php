<?php

require 'models/DBConnect.php';
require 'models/Users.php';
require 'core/SignUp.php';



//$pdo = DBConnect::getConnection();
//
//$query = "SELECT login, first_name, last_name, email, password
//          FROM users;";
//
//$statement = $pdo->query($query);
//
//$users = $statement->fetchAll();
//
//foreach ($users as $user);



if($_SERVER['REQUEST_METHOD'] === 'POST'){// если форма отправлена
    // проверяем данные
    list($errors, $input) = SignUp::validateForm();
    print_r($errors); print_r($input);

    if($errors){ // если ошибки есть
        // показываем форму снова
        require 'registration.php';
    }else{ // если ошибок нет
        // сохраняем данные
        SignUp::processForm($input);
    }

}else{// если страница загружена впервые
    // отображаем форму
    require 'registration.php';
}
