<?php require_once 'header.php';?>

	<h5><i>Количество выученных слов и фраз:</i></h5>
	<h4 class="count_of_words">0</h4>

	<div class="last_word">
	<h5><i>Последнее:</i></h5>
	<h4>consider - рассматривать</h4>
	</div>
	<?php echo $info; ?>
	<form method="POST">
		<div class="form-group">
		<label>
			<input type="text" name="english_word" class="form-control" placeholder="Английское слово">
		</label>
		<label>
			<input type="text" name="translating" class="form-control" placeholder="Перевод слова">
		</label><br /><br />
		<button type="submit" name="save" class="btn btn-lg">Сохранить</button>
		</div>
	</form>


<?php require_once 'footer.php'; ?>