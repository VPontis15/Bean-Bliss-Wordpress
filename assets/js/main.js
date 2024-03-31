const menu_btn = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.main_header_navigation-mobile');

menu_btn.addEventListener('click', function () {
  menu_btn.classList.toggle('is-active');
  menu_btn.classList.toggle('hamburger-sticky');
  mobile_menu.classList.toggle('is-active');
});
