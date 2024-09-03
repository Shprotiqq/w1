const btnUp = document.querySelector('.button_up');

btnUp.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
});

$('.header_burger').click(function (event) {
    $('.navigation__menu').toggleClass('navigation__menu-active');
    $('.catalog_area-left').toggleClass('catalog_area-left-active');
})