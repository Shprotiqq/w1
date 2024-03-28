$(document).ready(function () {
    if (matchMedia('(max-width: 832px)').matches) {
        $('.search').mouseover(function () {
            $('.compare').hide();
            $('.favorites').hide();
        });
        $('.search').mouseout(function () {
            $('.compare').show();
            $('.favorites').show();
        })
    }
})