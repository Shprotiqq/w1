document.addEventListener('DOMContentLoaded', () => {
    const orderList = document.querySelector('.order_modal-list')
    const productBtn = document.querySelectorAll('.button-buy')
    const orderBtn = document.querySelectorAll('.button_order')

    const generateCartProduct = (id, imgSrc, title) => {
        return `
    <li class="cart_list-item">
        <div class="cart_modal-item modal_item" data-id="${id}">
            <img class="modal_item-img" src="${imgSrc}" alt="">
            <div class="modal_item-info">
                <div class="modal_item-title">
                    ${title}
                </div>
            </div>
        </div>
    </li>
    `
    };

    orderBtn.forEach(el => {
        el.addEventListener('click', e => {
            let self = e.currentTarget;
            let parent = self.closest('.rating_card');
            let id = parent.dataset.id;
            let imgSrc = parent.querySelector('.rating_card-img').getAttribute('src');
            let title = parent.querySelector('.rating_card-name').textContent;

            let currentCard = {
                id: id,
                imgSrc: imgSrc,
                title: title
            }
            $('.order_modal').fadeIn();
            $('.simplebar-content').empty();
            let productItem = generateCartProduct(id, imgSrc, title);
            orderList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", productItem)
        })
    });

    productBtn.forEach(el => {
        el.addEventListener('click', e => {
            let self = e.currentTarget;
            let parent = self.closest('.catalog__card-card');
            let id = parent.dataset.id;
            let imgSrc = parent.querySelector('.card-img').getAttribute('src');
            let title = parent.querySelector('.card-name').textContent;

            let currentCard = {
                id: id,
                imgSrc: imgSrc,
                title: title
            }
            $('.order_modal').fadeIn();
            $('.simplebar-content').empty();
            let productItem = generateCartProduct(id, imgSrc, title);
            orderList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", productItem)
        })
    });

    $('.order_modal-overlay, .button_submit, .modal-close').click(function () {
        $('.order_modal').fadeOut();
    });
})








