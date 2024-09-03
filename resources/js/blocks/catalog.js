$(document).ready(function () {
    $('.button_option-1').on('mouseenter', function () {
        $('.catalog_area-list').hide();
        $('.catalog_list-1').toggle();

        $('.catalog_area-list').delay(10000).hide(0);
    })
    $('.button_option-2').on('mouseenter', function () {
        $('.catalog_area-list').hide();
        $('.catalog_list-2').toggle();

        $('.catalog_area-list').delay(10000).hide(0)
    })

    if ($(window).width() < 980) {
        $('.button_option-1').on('click', function () {
            $('.catalog_area-list').hide();
            $('.catalog_list-1').toggle();

            $('.catalog_area-list').delay(10000).hide(0)
        })
        $('.button_option-2').on('click', function () {
            $('.catalog_area-list').hide();
            $('.catalog_list-2').toggle();

            $('.catalog_area-list').delay(10000).hide(0)
        })
    }

    $('.catalog_area-list').delay(3000).hide(0)
})