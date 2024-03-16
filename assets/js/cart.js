const cartList = document.querySelector('.cart_modal-list')
const productBtn = document.querySelectorAll('.button-addToCart')
const cartQuantity = document.querySelector('.cart_quantity')
const deleteBtn = document.querySelectorAll('.button_delete')

const updateStorage = () => {
    let parent = cartList.querySelector('.modal_item');
    let html = parent.innerHTML;
    console.log(html)
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

}
productBtn.forEach(el => {
    el.addEventListener('click', e => {
        let self = e.currentTarget;
        let parent = self.closest('.catalog__card');
        let id = parent.dataset.id;
        let imgSrc = parent.querySelector('.card-img').getAttribute('src');
        let title = parent.querySelector('.card-name').textContent;
        console.log(self, parent, id, imgSrc, title)

        cartList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", generateCartProduct(id, imgSrc, title))
        printQuantity()
    })
})

cartList.addEventListener('click', e => {
    if (e.target.classList.contains('button_delete')) {
        deleteProducts(e.target.closest('.cart_list-item'))
    }
})





// window.addEventListener('click', e => {
//     if (e.target.hasAttribute('data-cart')) {
//         const card = e.target.closest('.catalog__card');
//         const productInfo = {
//             id: card.dataset.id,
//             imgSrc: card.querySelector('.card-img').getAttribute('src'),
//             title: card.querySelector('.card-name').innerText,
//             charOne: card.querySelector('.chars_first').innerText,
//             charTwo: card.querySelector('.chars_second').innerText,
//             charThree: card.querySelector('.chars_third').innerText
//         };
//         const cartItemHTML = `<li class="cart_list-item">
//                             <div class="cart_modal-item modal_item" data-id="${productInfo.id}">
//                                 <img class="modal_item-img" src="${productInfo.imgSrc}" alt="">
//                                 <div class="modal_item-info">
//                                     <div class="modal_item-title">
//                                         ${productInfo.title}
//                                     </div>
//                                     <div class="modal_item-button">
//                                         <button class="button button_gray button_delete">
//                                             Удалить из списка
//                                         </button>
//                                     </div>
//                                 </div>
//                             </div>
//                         </li>`;
//
//         cartList.querySelector('.simplebar-content').insertAdjacentHTML("beforeend", generateCartProduct(id, imgSrc, title))
//         updateStorage();
//     }
// });





