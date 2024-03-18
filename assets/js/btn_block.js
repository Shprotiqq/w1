document.addEventListener('DOMContentLoaded', () => {
    const btnUp = document.querySelector('.button_up');
    const catalog = document.querySelector('.catalog__bottom')
    const additionalCatalog = document.querySelector('.catalog_additional-cards')

    btnUp.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    });

    // Кнопка "избранное" на карточке товара в основном каталоге

    const btnFav = document.querySelectorAll('.button_fav');
    const favList = document.querySelector('.fav_list');

    const updateFavStorage = () => {
        let parent = favList.querySelector('.fav_list-item');
        console.log(parent)
        let html = parent.innerHTML
        localStorage.setItem('favourites', html)
    }


    btnFav.forEach(el => {
        el.addEventListener('click', e => {
            let self = e.currentTarget;
            let parent = self.closest('.catalog__card');
            let cardBtn = parent.querySelector('.button_fav');
            cardBtn.disabled = true;
            favList.querySelector('.fav_list-item').insertAdjacentHTML("afterbegin", parent.innerHTML)
            updateFavStorage()

        })
    })
    const initialFavState = () => {
        if (localStorage.getItem('favourites') !== null) {
            favList.querySelector('.fav_list-item').innerHTML = localStorage.getItem('favourites')

            favList.querySelectorAll('.catalog__card-card').forEach(el => {
                let id = el.dataset.id;
                catalog.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_fav').disabled = true;
            })
        }
    }

    initialFavState();


    // Кнопка "сравнить" на карточке товара в основном каталоге

    const btnCompare = document.querySelectorAll('.button_comp');
    const compList = document.querySelector('.comp_list')

    const updateCompStorage = () => {
        let parent = compList.querySelector('.comp_list-item');
        let html = parent.innerHTML
        localStorage.setItem('compare', html)
    }


    btnCompare.forEach(el => {
        el.addEventListener('click', e => {
            let self = e.currentTarget;
            let parent = self.closest('.catalog__card');
            let cardBtn = self;
            cardBtn.disabled = true;
            compList.querySelector('.comp_list-item').insertAdjacentHTML("afterbegin", parent.innerHTML)
            updateCompStorage()

        })
    })
    const initialCompState = () => {
        if (localStorage.getItem('compare') !== null) {
            compList.querySelector('.comp_list-item').innerHTML = localStorage.getItem('compare')

            compList.querySelectorAll('.catalog__card-card').forEach(el => {
                let id = el.dataset.id;
                catalog.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_comp').disabled = true;
            })
        }
    }

    initialCompState();

});
