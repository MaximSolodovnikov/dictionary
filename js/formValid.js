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

function formAuthorizValid() {
    
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

function formRecovEmail() {

    var form = document.forms['techForm'];
    var emailInput = form.elements.user_email.value;
    
    if (emailInput === '' || emailInput === null) {
        document.getElementById('error').innerHTML = 'Вы не ввели адрес эл.почты (js)';
        return false;
    }   
}

function formMainValid() {
    var form = document.forms['techForm'];
    var engWord = form.elements.eng_word.value;
    var translate = form.elements.translate.value;
    
    if ((engWord === null || engWord === '') && (translate === null || translate === '')) {
        document.getElementById('error').innerHTML = 'Вы не заполнили все поля (js)';
        return false;
    } else if (engWord === '' || engWord === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Имя (js)';
        return false;
    } else if (translate === '' || translate === null) {
        document.getElementById('error').innerHTML = 'Вы не заполнили поле Имя (js)';
        return false;
    } else {
        return true;
    }
}