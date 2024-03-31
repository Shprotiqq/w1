$(document).ready(function () {
    if ($(window).width() >= 832) {
        $('.search').mouseover(function () {
            $('.compare').hide();
            $('.favorites').hide();
        });
        $('.search').mouseout(function () {
            $('.compare').show();
            $('.favorites').show();
        })
    }
    if ($(window).width() <= 832) {
        $('.navigation').addClass('container')
    }
})
