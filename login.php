<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form method="post" enctype="multipart/form-data" class="form formLog">

        <label>Логин:</label>
        <input type="text" name="login" placeholder="Введите логин">
        <span class="error"></span>

        <label>Пароль:</label>
        <input type="password" id="regPassword1" name="password" placeholder="Введите пароль">
        <span class="error"></span>

        <input type="submit" value="Войти" class="button">
    </form>
</div>

<script src="script.js"></script>
</body>
</html>