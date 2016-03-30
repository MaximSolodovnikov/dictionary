<?php  require_once 'fns.php';

session_start();
    
$act = $_GET['act'] ? $_GET['act'] : 'registration';

switch ($act) {
    case "registration":
        if ($_POST['registration']) {
            $user_name = input_user($_POST['user_name']);
            $user_surname = input_user($_POST['user_surname']);
            $user_email = input_user($_POST['user_email']);
            if (empty($user_name) && empty($user_surname) && empty($user_email)) {
                $totalError = "Заполните все поля";
            } elseif (empty($user_name)) {
                $userNameError = "Не заполнено поле 'Ваше имя'";
            } elseif (empty($user_surname)) {
                $userSurnameError = "Не заполнено поле 'Ваша фамилия'";
            } elseif (empty($user_email)) {
                $userEmailError = "Не заполнено поле 'Адрес эл.почты'";
            } elseif (check_user($user_name, $user_surname)) {
                $userExistError = "Такой пользователь уже существует";
            } else {
                add_user($user_name, $user_surname, $user_email);
                header("Location: index.php?act=login");
            }
        }
        require_once "views/registration.php";
        break;
    
    case "login":
        if ($_POST['login']) {
            
            $user_name = input_user($_POST['user_name']);
            $user_surname = input_user($_POST['user_surname']);

            if (empty($user_name) && empty($user_surname)) {
                $totalError = "Заполните все поля";
            } elseif (empty($user_name)) {
                $userNameError = "Не заполнено поле 'Ваше имя'";
            } elseif (empty($user_surname)) {
                $userSurnameError = "Не заполнено поле 'Ваша фамилия'";
            } elseif ($user_id = check_login($user_name, $user_surname)) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_surname'] = $user_surname;
                header("Location: index.php?act=main");
            } else {
                $userExistError = "Указанный пользователь не зарегистрирован";
            }
        }
        require_once 'views/login.php';
        break;
        
    case "main":
        if (empty($_SESSION)) {
            header("Location: index.php?act=login");
        } else {

            $my_words = get_my_words();

            if ($_POST['input']) {
                
                $eng_word = input_user($_POST['eng_word']);
                $translate = input_user($_POST['translate']);
                
                if (empty($eng_word) && empty($translate)) {
                    $totalError = "Заполните все поля";
                } elseif (empty ($eng_word)) {
                    $engWordError = "Вы не ввели слово для перевода";
                } elseif (empty ($translate)) {
                    $translateError = "Вы не ввели перевод";
                } else {
                    add_word($eng_word, $translate, $_SESSION['user_id']);
                    header("Location: index.php?act=main");
                }
            }
            require_once "views/main.php";
        }
        break;
    
    case "exit":
        exit_user($_SESSION['user_name'], $_SESSION['user_surname']);
        header("Location: index.php?act=login");
        break;
    
    case "forgot":
        if ($_POST['forgot']) {
            $user_email = input_user($_POST['user_email']);
            if ($data_user = check_email($user_email)) {
                $subject = "Recovering of user profile";
                $message = "Ваше имя: " . $data_user[0]['user_name'] . "<br>";
                $message .= "Ваша фамилия: " . $data_user[0]['user_surname'];
                mail($user_email, $subject, $message);
                header("Location: index.php?act=login");
            } else {
                $emailError = "Вы указали не верный адрес эл.почты";
            }
        }
        require_once "views/forgot.php";
        break;
        
    default:
        require_once "views/404.php";
        break;
}