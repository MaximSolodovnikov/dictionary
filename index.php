<?php
/*header("Content-Type: text/html; charset=UTF-8");*/

mysql_connect('localhost', 'salomuG', 'salomuG') or die("Can not connect to DB");
mysql_select_db('dictionary') or die("Cannot select db");

$act = isset($_GET['act']) ? $_GET['act'] : 'main';

switch($act) {
	
	case 'main':
		$english_word = htmlspecialchars(trim($_POST['english_word']));
		$translating = htmlspecialchars(trim($_POST['translating']));	
			
		if (isset($_POST['save_word']) && !empty($_POST['english_word']) && !empty($_POST['translating'])) {

			$sql = "INSERT INTO `dictionary` (`eng_word`, `ru_word`)
					VALUES ('$english_word', '$translating')";
			$res = mysql_query($sql);
			if($res) {
				unset($english_word);
				unset($translating);
			}
			$info = "Cool";
		}
		else {
			$info = "Error";
		}
		$last_word = array();
		$sql = "SELECT `eng_word`, `ru_word` FROM `dictionary` ORDER BY id DESC LIMIT 3";
		$res = mysql_query($sql);
		
		while ($row = mysql_fetch_row($res)) {
			$last_word[] = $row;
		}
			require_once 'views/main.php';
		break;

	
	case 'statistics':
		require_once 'views/statistics.php';
		break;
	
	case 'about':
		require_once 'views/about.php';
		break;
		
		default:
		echo "404 error";
		break;
}