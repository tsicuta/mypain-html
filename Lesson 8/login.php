<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <section><form name="myForm" method="post" onsubmit="return validate();" action="login.php]">
        
        <div class="form-group">
            <label for="email">Email</label>
            <label class="form-error" id="email_error">Неверный формат электронной почты.* </label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="passwd1">Пароль</label>
            <label class="form-error" id="passwd1_error">Поле не должно оставаться пустым.*</label>
            <input type="password" name="passwd1" id="passwd1">
        </div>
    
        <button type="submit">Войти</button>
</form>
</section>
<script src="app_login.js"></script>
</body>
</html>