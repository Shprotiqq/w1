document.addEventListener('DOMContentLoaded', () => {
    const cartList = document.querySelector('.cart_modal-list')
    const productBtn = document.querySelectorAll('.button-addToCart')
    const cartQuantity = document.querySelector('.cart_quantity')
    const deleteBtn = document.querySelectorAll('.button_delete')
    let productsList = [];
    const data = localStorage.getItem('products')
    if (data !== '' && data !== null) {
        productsList = JSON.parse(data)
    }

    const generateCartProduct = (id, imgSrc, title) => {
        return `
    <li class="cart_list-item">
        <div class="cart_modal-item modal_item" data-id="${id}">
            <img class="modal_item-img" src="${imgSrc}" alt="">
            <div class="modal_item-info">
                <div class="modal_item-title">
                    ${title}
                </div>
                <div class="modal_item-button">
                    <button class="button button_gray button_delete">
                        Удалить из списка
                    </button>
                </div>
            </div>
        </div>
    </li>
    `
    };


    const updateStorage = () => {
        localStorage.setItem('products', JSON.stringify(productsList));
    }

    function printQuantity ()  {
        let n = productsList.length;
        cartQuantity.textContent = n;
    };

    window.addEventListener("load", printQuantity)

    const deleteProducts = (productParent) => {
        productParent.remove();

    };

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

            productsList.push(currentCard);

            printQuantity()
            updateStorage()
            console.log(productsList)
        })
    });

    cartList.addEventListener('click', e => {
        if (e.target.classList.contains('button_delete')) {
            deleteProducts(e.target.closest('.cart_list-item'))
            let id = e.target.closest('.modal_item').dataset.id;
            let index = productsList.findIndex(el => el.id === id);
            productsList.splice(index, 1);
        }

        updateStorage();

        printQuantity()
    });

    $('.button_basket-small, .button_basket').click(function () {
        $('.cart_modal').fadeIn();
        $('.simplebar-content').empty();
        for (const product of productsList) {
            let id = product.id;
            let imgSrc = product.imgSrc;
            let title = product.title;
            let productItem = generateCartProduct(id, imgSrc, title);
            cartList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", productItem)
        }
    });

    $('.cart_modal-overlay, .button_submit').click(function () {
        $('.cart_modal').fadeOut();
    });

})







