const BUTTON_BOOK = document.querySelector('#btn-show-tours');
const USER_LOGGED = document.querySelector('.stored-user');

if (USER_LOGGED.textContent == ''){
    BUTTON_BOOK.addEventListener('click', function(e){
        e.preventDefault();
        alert("Please Log In First");
        window.location.href = signinUrl;
    });
} else {
    BUTTON_BOOK.addEventListener('click', function(e){
        e.preventDefault();
        window.location.href = destnationUrl;
    });
}