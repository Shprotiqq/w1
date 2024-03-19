const cartList = document.querySelector('.cart_modal-list')
const cartQuantity = document.querySelector('.cart_quantity')
const storageInit = localStorage.getItem('products');
let productsList = JSON.parse(storageInit)

const innitialState = () => {
    let number = productsList.length
    cartQuantity.textContent = number
}

innitialState();


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

$('.button_basket-small, .button_basket').click(function () {
    $('.cart_modal').fadeIn();
    $('.simplebar-content').empty();
    // let data = localStorage.getItem('products')
    if (storageInit !== '' && storageInit !== null) {
        // productsList = JSON.parse(storageInit)
        for (const product of productsList) {
            let id = product.id;
            let imgSrc = product.imgSrc;
            let title = product.title;
            let productItem = generateCartProduct(id, imgSrc, title);
            cartList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", productItem)
        }
    }
});

$('.cart_modal-overlay, .button_submit').click(function () {
    $('.cart_modal').fadeOut();
});

$('.button_fav').click(function () {
    $('.button-fav').toggleClass('button_fav-active');
});
