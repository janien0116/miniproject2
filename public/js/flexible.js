const MEDIA_QUERY = window.matchMedia("(min-width: 701px)");
const MENU_TOGGLER = document.querySelector('#menu-toggler');
const LI_DIV = document.querySelector('#li-div');

MENU_TOGGLER.addEventListener('click', function(){
    LI_DIV.style.display = "flex";

    if (!MENU_TOGGLER.checked) {
        LI_DIV.style.display = "none";
    }
});
window.onresize = function() {
    if (MEDIA_QUERY.matches){
        LI_DIV.style.display = "flex";
    } else {
        LI_DIV.style.display = "none";
    }
}
// const ACTIVE_NAV = document.querySelector('.active');
// const USER_LOGGED1 = document.querySelector('.stored-user');

// if (USER_LOGGED1.textContent.endsWith('Logged In')){
//     ACTIVE_NAV.addEventListener('click', function(e){
//         e.preventDefault();
//         window.location.href =  `${ACTIVE_NAV.getAttribute('data-target')}.html`;
//     });
// } else {
//     ACTIVE_NAV.addEventListener('click', function(e){
//         e.preventDefault();
//         alert("Please Log In First");
//         window.location.href = 'signin.html';
//     });
// }