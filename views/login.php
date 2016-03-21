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
            <h6>Для продолжения введите свое имя и фамилию</h6>
            <div id="error"><?= $totalError; ?></div>
            <form action="index.php?act=login" method="post">
                <div id="error"><?= $userNameError; ?></div>
                <label>Введите имя:</label>
                <input type="text" name="eng_word" value="<?= $eng_word; ?>" size="20">
                <br><br>
                <div id="error"><?= $userSurnameError; ?></div>
                <label>Введите фамилию:</label>
                <input type="text" name="translate" value="<?= $translate; ?>" size="20">
                <br><br>
                <input type="submit" name="login" value="Вход">
            </form>
        </section>
        <footer>
            <script src="js/formValidation.js"><script>
        </footer>
    </body>
</html>