
let btn_menu = document.querySelector('#btnmenu');
let nav_list = document.querySelector('.nav-list');
let state = 0;

btn_menu.addEventListener('click', () => {
    state = 1 - state;

    if (state) {
        btn_menu.classList.replace('fa-arrow-down', 'fa-arrow-up');
        nav_list.classList.replace('nav-list', 'displayNav');
    }

    else {
        btn_menu.classList.replace('fa-arrow-up', 'fa-arrow-down');
        nav_list.classList.replace('displayNav', 'nav-list');
    }
});