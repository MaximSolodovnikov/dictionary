<?php
header("Content-Type: text/html; charset=UTF-8");

mysql_connect('localhost', 'salomuG', 'salomuG') or die("Can not connect to DB");
mysql_select_db('dictionary') or die("Cannot select db");

$act = isset($_GET['act']) ? $_GET['act'] : 'main';

switch($act) {
	
	case 'main':
	
		$english_word = htmlspecialchars(trim($_POST['english_word']));
		$translating = htmlspecialchars(trim($_POST['translating']));
	
		if (isset($_POST['save']) && (!($english_word) || !($translating))){
			$info = "Error";
		}
		else {
			$sql = "INSERT INTO `dictionary` (`eng_word`, `ru_word`)
					VALUES ('$english_word', '$translating')";
			$res = mysql_query($sql);
			/*header('Location: ?act=main');*/
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