// Collapse nav
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

//Highlight active page menu
const CURRENT_PAGE = document.querySelector('body').id;
const NAV_LINKS = document.querySelectorAll('nav li a');

NAV_LINKS.forEach(link => {
    if (link.dataset.target === CURRENT_PAGE) {
        link.classList.add('active');
    }
});