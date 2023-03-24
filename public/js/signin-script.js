//Toggling of Sign Up Form
const SHOW_SIGNUP_BUTTON = document.querySelector("#show-signup");
const JOINER_SIGNUP = document.querySelector(".joiner-signup");
const JOINER_LOGIN = document.querySelector(".joiner-login");
const BACK_BUTTON = document.querySelector(".fa-arrow-left");
const BTN_SIGNUP = document.querySelector('#btn-signup');
const SIGNUP_PASSWORD = document.querySelector('#joiner-pass');
const CONFIRM_PASSWORD = document.querySelector('#joiner-pass-confirm')

SHOW_SIGNUP_BUTTON.addEventListener('click', function(){
    JOINER_LOGIN.style.display = "none";
    JOINER_SIGNUP.style.display = "block";
    BACK_BUTTON.style.display = "block";
});
BACK_BUTTON.addEventListener('click', function(){
    JOINER_LOGIN.style.display = "block";
    JOINER_SIGNUP.style.display = "none";
    BACK_BUTTON.style.display = "none";
});

//Confirm of passwords
function checkPasswords() {
    if (SIGNUP_PASSWORD.value === CONFIRM_PASSWORD.value) {
        BTN_SIGNUP.style.pointerEvents = "all";
        BTN_SIGNUP.style.backgroundColor = "#F08C4A";
        CONFIRM_PASSWORD.style.color = "green";
        SIGNUP_PASSWORD.style.color = "green";
    } else {
        BTN_SIGNUP.style.pointerEvents = "none";
        BTN_SIGNUP.style.backgroundColor = "#f2a979";
        CONFIRM_PASSWORD.style.color = "red";
        SIGNUP_PASSWORD.style.color = "red";
    }
}
CONFIRM_PASSWORD.addEventListener('input', checkPasswords);
SIGNUP_PASSWORD.addEventListener('input', checkPasswords);
