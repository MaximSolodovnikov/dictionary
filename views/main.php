<?php require_once 'header.php'; ?>

	<h5><i>Количество выученных слов и фраз:</i></h5>
	<h4 class="count_of_words">0</h4>
	<h3 class="<?php if ($info == 'Cool') { echo "ok"; } else {echo "error"; }?>"><?php echo $info; ?></h3>
	<div class="last_word">
	<h5><i>Последнее:</i></h5>
	<h4>consider - рассматривать</h4>
	</div>
	
	<form method="POST" action="">
		<div class="form-group">
		<label>Английское слово:
			<input type="text" name="english_word" class="form-control" value="">
		</label>
		<label>Перевод:
			<input type="text" name="translating" class="form-control" value="">
		</label><br /><br />
		<input type="submit" name="save_word" class="btn btn-lg" value="Save">
		</div>
	</form>

<?php require_once 'footer.php'; ?>