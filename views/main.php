<?php require_once 'header.php'; ?>

    <h5><i>Количество внесенных слов и фраз:</i></h5>
    <h4 class="count_of_words"><?= $words[0]['id']; ?></h4>
    <h3 class="error"></h3>
   
    <div class="last_word">
        <?php if ($words): ?>
            <h5><i>Последнее:</i></h5><br />
            <?php foreach($words as $item): ?>
                <h5><?= "№ " . $item['id']; ?> - <?= $item['eng_word']; ?> - <?= $item['ru_word']; ?><br /> (<?= $item['time_date']; ?>)</h5>
            <?php endforeach; ?>
        <?php endif; ?>
                
    </div>
    <div id="errors"><?php echo $error; ?></div>
    <div id="dictionaryform">
        <form method="POST" action="index.php?act=main">
            <div class="form-group">
                <label></label>
                <input type="text" name="english_word" placeholder="Английское слово:" class="form-control" value="<?= $english_word; ?>">
                <label></label>
                <input type="text" name="translating" placeholder="Перевод:" class="form-control" value="<?= $translating; ?>">
                <br /><br />
                <input type="submit" name="save_word" id="save_word" class="btn btn-lg" value="Сохранить">
            </div>
        </form>
    </div>
<?php require_once 'footer.php'; ?>