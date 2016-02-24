<?php
header("Content-Type: text/html; charset=utf-8");

mysql_connect('localhost', 'salomuG', 'salomuG') or die("Can not connect to DB");
mysql_select_db('dictionary') or die("Cannot select db");

$act = isset($_GET['act']) ? $_GET['act'] : 'main';

switch($act) {
	
	case 'main':
		/*$sql = "SELECT "*/
	
		require_once 'views/main.php';
		break;
	
	case 'statistics':
		require_once 'views/statistics.php';
		break;
	
	case 'about':
		require_once 'views/about.php';
		break;
}