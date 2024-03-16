$('.button_basket-small').click(function () {
    $('.cart_modal').fadeIn();
});
$('.button_basket').click(function (){
    $('.cart_modal').fadeIn();
})

$('.cart_modal-overlay').click(function () {
    $('.cart_modal').fadeOut();
});
$('.button_submit').click(function () {
    $('.cart_modal').fadeOut();
})


