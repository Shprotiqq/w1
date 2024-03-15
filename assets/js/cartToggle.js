const cartToggleBtn = document.querySelector('.button_basket-small');
const cartModal = document.querySelector('.cart_modal');
const cartArea = document.querySelector('.cart_modal-area');

cartToggleBtn.addEventListener('click', e => {
    if (cartModal.style.display === '' || cartModal.style.display === 'none') {
        cartModal.style.display = 'block';
    }
});

cartModal.addEventListener('click', e => {
    if (!(e.currentTarget.dataset('data-cartContent'))) {
        cartModal.style.display = 'none'
    }
});
