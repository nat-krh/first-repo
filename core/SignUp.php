<?php
// вспомогательный класс для проверки данных при регистрации

class SignUp
{


    /**
     * метод для проверки емейла
     */
    private static function validateEmail($email){
        $regExp = '/^.+@.+\..+$/';

        if(empty($email)){
            return 'Введите адес электронной почты';
        }elseif(!preg_match($regExp, $email)){
            return 'Адрес электронной почты введен в неверном формате';
        }

        // проверка емейла по БД
        $rowCount = Users::checkEmailUnique($email);

        if($rowCount){// если есть хоть одна строка в БД
            return 'Такой адрес электронной почты уже зарегистрирован';
        }
    }

    /**
     * метод для проверки логина
     */
    private static function validateLogin($login){
        $regExp = '/^[a-z][a-z0-9]{2,}$/i';

        if(empty($login)){ // если пусто
            return 'Введите логин';
        }elseif(!preg_match($regExp, $login)){
            return 'Только латинские буквы и цифры от 3 знаков, без спецсимволов. И первая буква';
        }

        // проверка логина по БД на уникальность
        $rowCount = Users::checkLoginUnique($login);

        if($rowCount){// если есть хоть одна строка в БД
            return 'Такой логин уже занят';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password){
        $regExp = '/^.{6,}$/';

        if(empty($password)){
            return 'Введите пароль';
        }elseif(!preg_match($regExp, $password)){
            return 'Не менее шести произвольных символов';
        }
    }


    /**
     * метод для проверки всех данных формы регистрации
     */
    public static function validateForm(){
        // объявляем массивы для ошибок и введенных данных
        $errors = [];
        $input = [];

        // экранируем данные и обрезаем конечные пробелы
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));


        /**
         * проверка емейла
         */
        $emailError = self::validateEmail($input['email']);
        if($emailError){
            $errors['email'] = $emailError;
        }

        /**
         * проверка логина
         */
        $loginError = self::validateLogin($input['login']);
        if($loginError){
            $errors['login'] = $loginError;
        }

        /**
         * проверка пароля
         */
        $passwordError = self::validatePassword($input['password']);
        if($passwordError){
            $errors['password'] = $passwordError;
        }

        return [$errors, $input];
    }


    /**
     * метод для сохранения данных
     */
    public static function processForm($input){

        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);// шифруем пароль

        // сохранение данных о новом пользователе в БД и получаем его ID
        $input['userId'] = Users::addNewUser($input);

        // начинаем сессию и записываем в нее данные пользователя
        session_start();
        $_SESSION['userId'] = $input['userId'];
        $_SESSION['validUser'] = $input['login'];

        // перенаправляю на главную
        header('Location: /home/hogwarts-controller.php');

    }



}