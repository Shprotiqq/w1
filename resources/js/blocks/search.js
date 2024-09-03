$('.search').on('mouseenter', function () {
    $('.compare, .favorites').slideToggle();
    $('.search-area').toggleClass('search-area-active',600, 'easeOutSine');
});

$('.search').on('mouseleave', function () {
    $('.search-area').toggleClass('search-area-active',600, 'easeOutSine');
    $('.compare, .favorites').slideToggle();
});


