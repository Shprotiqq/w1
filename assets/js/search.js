$(document).ready(function () {
    $('.search').mouseover(function () {
        $('.compare').hide();
        $('.favorites').hide();
    });
    $('.search').mouseout(function () {
        $('.compare').show();
        $('.favorites').show();
    })
})