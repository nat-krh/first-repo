<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data" class="form formReg">

            <label>Почта:</label>
            <input type="text" name="email" placeholder="Введите адрес электронной почты">
            <span class="error"></span>

            <label>Логин:</label>
            <input type="text" name="login" placeholder="Придумайте логин">
            <span class="error"></span>

            <label>Пароль:</label>
            <input type="password" id="regPassword1" name="password" placeholder="Придумайте пароль">
            <button id="showPass1">Показать пароль</button>
            <span class="error"></span>

            <label>Подтверждение пароля:</label>
            <input type="password" id="regPassword2" name="password" placeholder="Подтвердите пароль">
            <button id="showPass2">Показать пароль</button>
            <span class="error" id="regError"></span>

            <input type="submit" value="Зарегистрироваться" class="button">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>