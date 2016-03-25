<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/my_style.css">
        <link rel="icon" href="favicon.png">
        <title>Словарь</title>
    </head>
    <body>
        <header>
            <p>Восстановление профиля</p>
        </header>
        <section id="formRegistr">
            <form name="techForm" action="index.php?act=forgot" method="post" onsubmit="return formRecovEmail()">
                <div id="formName"></div>
                <div id="error"><?= $emailError; ?></div>
                <br>
                <label>Введите адрес эл.почты:</label>
                <input type="email" name="user_email" value="<?= $user_email; ?>" size="20">
                <br><br>
                <input type="submit" name="forgot" value="Восстановить">
            </form>
        </section>
        <footer>
            <script src="js/formValid.js"></script>
        </footer>
    </body>
</html>