<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/my_style.css">
        <title>Словарь</title>
    </head>
    <body>
        <section id="formLogin">
            <h4>Добро пожаловать в электронный словарь</h4>
            <h5>Для продолжения введите свое имя и фамилию</h5>
            <div id="error"><?= $totalError; ?></div>
            <form name="formLogin" action="index.php?act=login" method="post" onsubmit="return formValid()">
                <div id="error"><?= $userNameError; ?></div>
                <label>Введите имя:</label>
                <br>
                <input type="text" name="user_name" value="<?= $user_name; ?>" size="20">
                <br><br>
                <div id="error"><?= $userSurnameError; ?></div>
                <label>Введите фамилию:</label>
                <input type="text" name="user_surname" value="<?= $user_surname; ?>" size="20">
                <br><br>
                <input type="submit" name="login" value="Вход">
            </form>
        </section>
        <footer>
            <script src="js/formValidation.js"></script>
        </footer>
    </body>
</html>