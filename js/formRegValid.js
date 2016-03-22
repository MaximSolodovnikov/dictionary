function formRegValid() {
    var userName = document.forms['techForm']['user_name'].value;
    var userSurname = document.forms['techForm']['user_surname'].value;
    var userEmail = document.forms['techForm']['user_email'].value;
    
    if ((userName === null || userName === '') && (userSurname === null || userSurname === '') && (userEmail === null || userEmail === '')) {
        document.getElementById('error').innerHTML = 'Вы не заполнили все поля (js)';
        return false;
    } else if (userName === '' || userName === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Имя (js)';
        return false;
    } else if (userSurname === '' || userSurname === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Фамилия (js)';
        return false;
    } else if (userEmail === '' || userEmail === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Адрес эл.почты (js)';
        return false;
    } else {
        return true;
    }
}