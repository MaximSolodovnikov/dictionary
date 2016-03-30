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
            <p>
                Добро пожаловать в электронный словарь, 
                <?= "<br>" . $_SESSION['user_name'] . " " . $_SESSION['user_surname']; ?> 
                <?php if($_SESSION):  ?>
                <a id="exit" href="index.php?act=exit">&times;</a>
                <?php endif; ?>
            </p>
        </header>
        <div id="wrapper">
            <?php if (!empty($my_words)): ?>
                <table id="table_output_words">
                    <tr>
                        <th>Англ. слово</th>
                        <th>Перевод</th>
                        <th>Дата и время</th>
                    </tr>
                    
                    <?php foreach($my_words as $item): ?>

                        <?php if ($_SESSION['user_id'] == $item['user_id']): ?>
                            <tr>
                                <td><?php echo $item['eng_word']; ?></td>
                                <td><?php echo $item['translate']; ?></td>
                                <td id="time_date"><?php echo $item['time_date']; ?></td>
                            </tr>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
            
            <section id="formMain">
                <form name="techForm" action="index.php?act=main" method="post" onsubmit="return formMainValid()">
                    <div id="formName"></div>
                    <br>
                    <div id="error"><?= $totalError . $engWordError; ?></div>
                    <br>
                    <label>Введите англ.слово или фразу:</label>
                    <br>
                    <input type="text" name="eng_word" value="<?= $engWord; ?>" size="20">
                    <br><br>
                    <div id="error"><?= $translateError; ?></div>
                    <label>Введите перевод:</label>
                    <input type="text" name="translate" value="<?= $translate; ?>" size="20">
                    <br><br>
                    <input type="submit" name="input" value="Внести">
                </form>
            </section>
        </div>
        <footer>
            <script src="js/formValid.js"></script>
        </footer>
    </body>
</html>