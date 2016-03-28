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
        <section id="formLogin">
            <form name="techForm" action="index.php?act=login" method="post" onsubmit="return formAuthorizValid()">
                <div id="formName">Форма Авторизации</div>
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
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
                <br><br>
                <input type="submit" name="login" value="Вход">
            </form>
            <br>
            <a href="index.php?act=forgot">Восстановление профиля</a>
            <br>
            <a href="index.php?act=registration">Регистрация</a>
        </section>
        <footer>
            <script src="js/formValid.js"></script>
        </footer>
    </body>
</html>