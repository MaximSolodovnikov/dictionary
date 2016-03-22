function formValid() {
    var userName = document.forms['techForm']['user_name'].value;
    var userSurname = document.forms['techForm']['user_surname'].value;
    
    if ((userName === null || userName === '') && (userSurname === null || userSurname === '')) {
        document.getElementById('error').innerHTML = 'Вы не заполнили все поля (js)';
        return false;
    } else if (userName === '' || userName === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Имя (js)';
        return false;
    } else if (userSurname === '' || userSurname === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Фамилия (js)';
        return false;
    } else {
        return true;
    }
}