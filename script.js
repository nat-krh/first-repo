console.log(123);

/**
 * Сравнение паролей при регистрации
 */
(function () {
    let regPassword1 = document.querySelector('#regPassword1');
    let regPassword2 = document.querySelector('#regPassword2');
    let regError = document.querySelector('#regError');

    let pass1;
    let pass2;

    regPassword1.addEventListener('blur', function (){
        pass1 = regPassword1.value.trim();
    })

    regPassword2.addEventListener('blur', function (){
        pass2 = regPassword2.value.trim();

        if (pass1 !== pass2) {
            regError.textContent = 'Пароли не совпадают';
        } else {
            regError.textContent = '';
        }
    })
})();

/**
 * Просмотр пароля
 */

(function () {
    let showPass1 = document.querySelector('#showPass1');

    showPass1.addEventListener('click', function () {
        event.preventDefault();
        let passShow = showPass1.previousElementSibling;
        passShow.type = 'text';
    })

    showPass1.addEventListener('blur', function () {
        event.preventDefault();
        let passShow = showPass1.previousElementSibling;
        passShow.type = 'password';
    })
})();

/**
 * Просмотр подтверждения пароля
 */

(function () {
    let showPass2 = document.querySelector('#showPass2');

    showPass2.addEventListener('click', function () {
        event.preventDefault();
        let passShow = showPass2.previousElementSibling;
        passShow.type = 'text';
    })

    showPass2.addEventListener('blur', function () {
        event.preventDefault();
        let passShow = showPass2.previousElementSibling;
        passShow.type = 'password';
    })
})();