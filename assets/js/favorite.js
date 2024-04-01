let favStorage = []
const favData = localStorage.getItem('favorite')
const btnFav = document.querySelectorAll('.button_fav');
const favList = document.querySelector('.favorite_modal-list')

if (favData !== '' && favData !== null) {
    favStorage = JSON.parse(favData)
}

for (const favItem of favStorage) {
    let id = favItem.id;
    document.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_fav').classList.toggle('button_fav-active')
}

const generateFavProduct = (id, imgSrc, title) => {
    return `
    <li class="favorite_list-item">
        <div class="favorite_modal-item modal_item" data-id="${id}">
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

const deleteFavProducts = (productParent) => {
    productParent.remove();
};

const updateFavStorage = () => {
    localStorage.setItem('favorite', JSON.stringify(favStorage));
}

btnFav.forEach(el => {
    el.addEventListener('click', e => {
        let self = e.currentTarget;
        let parent = self.closest('.catalog__card-card');
        let cardBtn = parent.querySelector('.button_fav');
        if (cardBtn.classList.contains('button_fav-active')) {
            cardBtn.classList.toggle('button_fav-active');
            let id = e.target.closest('.catalog__card-card').dataset.id;
            let index = favStorage.findIndex(el => el.id === id);
            favStorage.splice(index, 1);
            updateFavStorage();

        } else {
            cardBtn.classList.toggle('button_fav-active');
            let id = parent.dataset.id;
            let imgSrc = parent.querySelector('.card-img').getAttribute('src');
            let title = parent.querySelector('.card-name').textContent;
            let cardInfo = {
                id: id,
                imgSrc: imgSrc,
                title: title,
            }
            favStorage.push(cardInfo)
            localStorage.setItem('favorite', JSON.stringify(favStorage))
        }
    })
})

favList.addEventListener('click', e => {
    if (e.target.classList.contains('button_delete')) {
        deleteFavProducts(e.target.closest('.favorite_list-item'))
        let id = e.target.closest('.modal_item').dataset.id;
        document.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_fav').classList.remove('button_fav-active');
        let index = favStorage.findIndex(el => el.id === id);
        favStorage.splice(index, 1);
    }

    updateFavStorage();
});

$('.button_favorites').click(function () {
    $('.favorite_modal').fadeIn()
    $('.simplebar-content').empty();
    for (const favorite of favStorage) {
        let id = favorite.id;
        let imgSrc = favorite.imgSrc;
        let title = favorite.title;
        let favListItem = generateFavProduct(id, imgSrc, title);
        favList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", favListItem)
    }
})

$('.favorite_modal-overlay, .button_submit, .modal-close').click(function () {
    $('.favorite_modal').fadeOut();
});



