document.addEventListener('DOMContentLoaded', () => {
    const cartList = document.querySelector('.cart_modal-list')
    const productBtn = document.querySelectorAll('.button-addToCart')
    const cartQuantity = document.querySelector('.cart_quantity')
    const deleteBtn = document.querySelectorAll('.button_delete')

    const updateStorage = () => {
        let parent = cartList.querySelector('.simplebar-content');
        let html = parent.innerHTML;
        html = html.trim();
        localStorage.setItem('products', html);
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
    }
    const printQuantity = () => {
        let number = cartList.querySelector('.simplebar-content').children.length;
        cartQuantity.textContent = number;
    }

    const deleteProducts = (productParent) => {
        productParent.remove()
        printQuantity();
        updateStorage();
    }
    productBtn.forEach(el => {
        el.addEventListener('click', e => {
            let self = e.currentTarget;
            let parent = self.closest('.catalog__card');
            let id = parent.dataset.id;
            let imgSrc = parent.querySelector('.card-img').getAttribute('src');
            let title = parent.querySelector('.card-name').textContent;

            cartList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", generateCartProduct(id, imgSrc, title))
            printQuantity()
            updateStorage()
        })
    })

    cartList.addEventListener('click', e => {
        if (e.target.classList.contains('button_delete')) {
            deleteProducts(e.target.closest('.cart_list-item'))
        }
    })

    const initialState = () => {
        if (localStorage.getItem('products') !== null) {
            cartList.querySelector('.simplebar-content').innerHTML = localStorage.getItem('products');
            printQuantity()
        }
    }

    initialState()
})







