<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/my_style.css">
        <title>Словарь</title>
    </head>
    <body>
        <header>
            <p>Добро пожаловать в электронный словарь</p>
        </header>
        <section id="formRegistr">
            <form name="techForm" action="index.php?act=registration" method="post" onsubmit="return formRegValid()">
                <div id="formName">Форма регистрации</div>
                <br>
                <div id="error"><?= $totalError . $userNameError . $userExistError; ?></div>
                <br>
                <label>Введите имя:</label>
                <br>
                <input type="text" name="user_name" value="<?= $user_name; ?>" size="20">
                <br><br>
                <div id="error"><?= $userSurnameError; ?></div>
                <label>Введите фамилию:</label>
                <input type="text" name="user_surname" value="<?= $user_surname; ?>" size="20">
                <br><br>
                <div id="error"><?= $userEmailError; ?></div>
                <label>Введите адрес эл.почты:</label>
                <input type="email" name="user_email" value="<?= $user_email; ?>" size="20">
                <br><br>
                <input type="submit" name="registration" value="Регистрация">
            </form>
            <br>
            <a href="index.php?act=login">Авторизация</a>
        </section>
        <footer>
            <script src="js/formRegValid.js"></script>
        </footer>
    </body>
</html>