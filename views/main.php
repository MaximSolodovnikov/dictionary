<?php require_once 'header.php'; ?>

	<h5><i>Количество внесенных слов и фраз:</i></h5>
	<h4 class="count_of_words">0</h4>
	<h3 class="visibility_info <?php if ($info == 'Cool') { echo "ok"; } else {echo "error"; }?>"><?php echo $info; ?></h3>
	<div class="last_word">
	<h5><i>Последнее:</i></h5>
	<?php foreach($last_word as $item): ?>
		<h4><?php echo $item[0]; ?> - <?= $item[1]; ?></h4>
	<?php endforeach; ?>
	</div>
	
	<form method="POST" action="">
		<div class="form-group">
		<label>
			<input type="text" name="english_word" placeholder="Английское слово:" class="form-control" value="<?= $english_word; ?>">
		</label>
		<label>
			<input type="text" name="translating" placeholder="Перевод:" class="form-control" value="<?= $translating; ?>">
		</label><br /><br />
		<input type="submit" name="save_word" id="save_word" class="btn btn-lg" value="Сохранить">
		</div>
	</form>

<?php require_once 'footer.php'; ?>