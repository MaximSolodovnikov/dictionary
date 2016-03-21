<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/my_style.css">
        <link rel="icon" href="favicon.png">
        <title>Словарь</title>
    </head>
    <body>
        <section id="formMain">
            <div id="error"><?= $totalError; ?></div>
            <form action="index.php?act=main" method="post">
                <div id="error"><?= $engWordError; ?></div>
                <label>Введите слово или фразу:</label>
                <br>
                <input type="text" name="eng_word" value="<?= $eng_word; ?>" size="20">
                <br><br>
                <div id="error"><?= $translateError; ?></div>
                <label>Введите перевод:</label>
                <br>
                <input type="text" name="translate" value="<?= $translate; ?>" size="20">
                <br><br>
                <input type="submit" name="login" value="Записать">
            </form>
        </section>
        <footer>
            <script src="js/formValidation.js"><script>
        </footer>
    </body>
</html>