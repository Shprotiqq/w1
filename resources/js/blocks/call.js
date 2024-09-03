const btnCall = document.querySelector(".button_call")
const formArea = document.querySelector(".call_form")
const formStock = document.querySelector(".stock-modal")
const btnSubmit = document.querySelector('.button_phone')
const btnCallBottom =document.querySelector('.button-contacts')
const formAreaBottom = document.querySelector('.call_form-bottom')
const btnSubmitBottom = document.querySelector('.button_phone-bottom')

btnCall.addEventListener("click", ()=> {
    if (formArea.style.display === '' || formArea.style.display === 'none') {
        formArea.style.display = 'flex';
    } else {
        formArea.style.display = 'none';
    }
})

btnSubmit.addEventListener('click', () => {
    formArea.style.display = 'none';
})

btnCallBottom.addEventListener("click", ()=> {
    if (formAreaBottom.style.display === '' || formAreaBottom.style.display === 'none') {
        formAreaBottom.style.display = 'flex';
    } else {
        formAreaBottom.style.display = 'none';
    }
})

btnSubmitBottom.addEventListener('click', () => {
    formAreaBottom.style.display = 'none';
})

$('.button_action.active').click(function () {
    $('.stock-modal').fadeIn();
});

$('.contacts_vacancies-link').click(function () {
    $('.tariff-modal .compare_modal-title').html($(this).html())
    $('.vacancies-modal').fadeIn();
    $('.vacancies-modal input[name="vacancies"]').val($(this).html());
});

$('.button_delivery').click(function () {
    $('.tariff-modal .compare_modal-title').html(`Информация о доставке: ${$(this).html()}`)
    $('.delivery-modal').fadeIn();
    $('.delivery-modal input[name="delivery"]').val($(this).html());
});

$('.about_general.general .button-letter').click(function () {
    $('.director-modal').fadeIn();
});

$('.tariff_block button').click(function () {
    $('.tariff-modal .compare_modal-title').html(`Тариф: ${$(this).data('tariff')}`)
    $('.tariff-modal').fadeIn();
    $('.tariff-modal input[name="tariff"]').val($(this).data('tariff'));
});

$('.compare_modal-overlay, .button_submit, .modal-close').click(function () {
    $('.stock-modal').fadeOut();
    $('.vacancies-modal').fadeOut();
    $('.delivery-modal').fadeOut();
    $('.director-modal').fadeOut();
    $('.tariff-modal').fadeOut();
});
$('form').on('submit', function (event) {
    event.preventDefault()
    $.post('/send-mail', $(event.target).serialize())
})
