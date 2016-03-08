var form = document.forms[0];
var englishWordInput = form.elements.english_word;
var translatingInput = form.elements.translating;

var errorMessageBlock = document.getElementById('errors');

function showErrors(errors) {
    var errorsContainer = document.createDocumentFragment();
    errors.forEach(function(error) {
        var errorWrapper = document.createElement('div');
        errorWrapper.innerHTML = error;
        errorsContainer.appendChild(errorWrapper);
    });

    errorMessageBlock.appendChild(errorsContainer);
}

function clearErrors() {
    errorMessageBlock.innerHTML = "";
}

function validateForm() {
    clearErrors();

    var errors = [];
    var englishWord = englishWordInput.value.trim();
    var translating = translatingInput.value.trim();


    var englishWordLimit = 50;
    var translatingLimit = 50;

    if(!englishWord) {
        errors.push("Вы не ввели слово на английском");
    } else if(englishWord.length > englishWordLimit) {
        errors.push("Максимальная длина поля: " + englishWordLimit);
    }

    if(!translating) {
        errors.push("Вы не ввели перевод");
    } else if(translating.length > translatingLimit) {
        errors.push("Максимальная длина поля: " + translatingLimit);
    }

    if(errors.length) {
        showErrors(errors);
    }
    
    return errors.length === 0;
}

form.onsubmit = validateForm;

/*var form = document.forms[0];

var englishWordInput = form.elements.english_word;
var translatingInput = form.elements.translating;
var errorMessageBlock = document.getElementById('errors');

function showErrors(errors) {
    var errorsContainer = document.createDocumentFragment();
    errors.forEach(function(error) {
        var errorWrapper = document.createElement('div');
        errorWrapper.innerHTML = error;
        errorsContainer.appendChild(errorWrapper);
    });

    errorMessageBlock.appendChild(errorsContainer);
}

    function clearErrors() {
        errorMessageBlock.innerHTML = '';
    }
    
    function validateForm() {
        clearErrors();
        
        var errors = [];
        var englishWord = englishWordInput.value.trim();
        var translating = translatingInput.value.trim();
        
        var englishWordLimit = 50;
        var translatingLimit = 50;
        
        if(!englishWord) {
            errors.push("Вы не ввели слово на английском языке");
        } else if(englishWord.length > englishWordLimit) {
            errors.push("Длина символов ограничена " + englishWordLimit);
        }
        
        if(!translating) {
            errors.push("Вы не ввели переводд слова");
        } else if (translating > translatingLimit) {
            errors.push("Длина символов ограничена " + englishWordLimit);
        }
        
        if(errors.length) {
            showErrors();
        }
        return errors.length === 0;
    }

form.onsubmit = validateForm;*/