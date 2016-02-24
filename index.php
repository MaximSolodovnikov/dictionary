<?php
header("Content-Type: text/html; charset=utf-8");

mysql_connect('localhost', 'salomuG', 'salomuG') or die("Can not connect to DB");
mysql_select_db('dictionary') or die("Cannot select db");

$act = isset($_GET['act']) ? $_GET['act'] : 'main';

switch($act) {
	
	case 'main':
		if (!($_POST['english_word']) && isset($_POST['save'])){
			$info = "Wrong!!!!";
		}
		else {
			$english_word = $_POST['english_word'];
			$translating = $_POST['translating'];
			
			$sql = "INSERT INTO `dictionary` (`eng_word`, `ru_word`)
					VALUES ('$english_word', '$translating')";
			$res = mysql_query($sql);
			
		}

		require_once 'views/main.php';
		break;
	
	case 'statistics':
		require_once 'views/statistics.php';
		break;
	
	case 'about':
		require_once 'views/about.php';
		break;
}