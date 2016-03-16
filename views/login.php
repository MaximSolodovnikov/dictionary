<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/my_style.css">
        <title>Словарь</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <div class="error"><?= $engWordError ;?></div>
            <input type="text" name="eng_word" value="<?= $eng_word; ?>">
            <br><br>
            <div class="error"><?= $translateError ;?></div>
            <input type="text" name="translate" value="<?= $translate; ?>">
            <br><br>
            <input type="submit" name="login">
        </form>
    </body>
</html>