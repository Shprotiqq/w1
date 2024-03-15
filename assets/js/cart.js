const cartList = document.querySelector('.cart_modal-list')
const deleteBtn = document.querySelectorAll('.button_delete')

window.addEventListener('click', e => {
    if (e.target.hasAttribute('data-cart')) {
        const card = e.target.closest('.catalog__card');
        const productInfo = {
            id: card.dataset.id,
            imgSrc: card.querySelector('.card-img').getAttribute('src'),
            title: card.querySelector('.card-name').innerText,
            charOne: card.querySelector('.chars_first').innerText,
            charTwo: card.querySelector('.chars_second').innerText,
            charThree: card.querySelector('.chars_third').innerText
        };
        const cartItemHTML = `   <div class="cart_modal-item modal_item" data-id="${productInfo.id}">
                        <img class="modal_item-img" src="${productInfo.imgSrc}" alt="">
                        <div class="modal_item-info">
                            <div class="modal_item-title">
                                ${productInfo.title}
                            </div>
                            <div class="modal_item-button">
                                <button class="button button_gray button_delete">
                                    Удалить из списка
                                </button>
                            </div>
                        </div>
                    </div>`;

        cartList.insertAdjacentHTML('beforeend', cartItemHTML);
    }
    function toggleCartStatus () {

    }
});



