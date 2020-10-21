// menu
let body = document.querySelector('body');
let menuOpen = document.querySelector('.js-menu-open');
let menuClose = document.querySelector('.js-menu-close');
let classMenu = 'is-active-menu';

menuOpen.addEventListener('click', function() {
  body.classList.add(classMenu);
});

menuClose.addEventListener('click', function() {
  body.classList.remove(classMenu);
});