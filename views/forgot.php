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
        <section id="formMain">
            <form name="techForm" action="index.php?act=forgot" method="post" onsubmit="">
                <div id="formName"></div>
                <br>
                <div id="error"><?= $userEmailError; ?></div>
                <label>Введите адрес эл.почты:</label>
                <input type="email" name="user_email" value="<?= $user_email; ?>" size="20">
                <br><br>
                <input type="submit" name="forgot" value="Восстановить">
            </form>
        </section>
        <footer>
            <script src=""><script>
        </footer>
    </body>
</html>