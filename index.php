<?php require_once 'fns.php';

$act = isset($_GET['act']) ? $_GET['act'] : 'main';

switch($act) {
	
    case 'main':

        db();

        $english_word = clear_data($_POST['english_word']);
        $translating = clear_data($_POST['translating']);

        if (isset($_POST['save_word'])) {
            if(!empty($english_word) && !empty($translating)) {

                /*Added words to DB*/
                add_word($english_word, $translating);
                header("Location: index.php?act=main");
            }
            else {
                $error = "Заполните все поля";
            }
        }
        /*Output words from DB*/
        $words = get_word();

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