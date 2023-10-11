<?php
// контроллер страницы входа
require 'models/Users.php'; // класс для работы с табл users
require 'core/SignIn.php';

$title = "Вход";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // проверяем данные
    list($errors, $input) = SignIn::validateForm();

    if($errors){
        require 'login.php';
    }else{
        SignIn::processForm($input);
    }

}else{
    require 'login.php';
}
