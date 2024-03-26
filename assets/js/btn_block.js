const btnUp = document.querySelector('.button_up');
const catalog = document.querySelector('.catalog__bottom')
const additionalCatalog = document.querySelector('.catalog_additional-cards')
let compStorage = []
let favStorage = []
const compData = localStorage.getItem('compare')
const favData = localStorage.getItem('favourite')

if (compData !== '' && compData !== null) {
    compStorage = JSON.parse(compData)
}

console.log(compStorage)

if (favData !== '' && favData !== null) {
    favStorage = JSON.parse(favData)
}

console.log(favStorage)



btnUp.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
});

// Кнопка "избранное" на карточке товара в основном каталоге

const btnFav = document.querySelectorAll('.button_fav');

btnFav.forEach(el => {
    el.addEventListener('click', e => {
        let self = e.currentTarget;
        let parent = self.closest('.catalog__card-card');
        let cardBtn = parent.querySelector('.button_fav');
        cardBtn.disabled = true;
        let id = parent.dataset.id;
        let imgSrc = parent.querySelector('.card-img').getAttribute('src');
        let title = parent.querySelector('.card-name').textContent;
        let cardInfo = {
            id: id,
            imgSrc: imgSrc,
            title: title,
        }
        favStorage.push(cardInfo)
        localStorage.setItem('favourite', JSON.stringify(favStorage))
    })
})


// Кнопка "сравнить" на карточке товара в основном каталоге
const btnCompare = document.querySelectorAll('.button_comp');


btnCompare.forEach(el => {
    el.addEventListener('click', e => {
        let self = e.currentTarget;
        let parent = self.closest('.catalog__card-card');
        let cardBtn = self;
        cardBtn.disabled = true;
        let id = parent.dataset.id;
        let imgSrc = parent.querySelector('.card-img').getAttribute('src');
        let title = parent.querySelector('.card-name').textContent;
        let cardInfo = {
            id: id,
            imgSrc: imgSrc,
            title: title,
        }
        compStorage.push(cardInfo)
        localStorage.setItem('compare', JSON.stringify(compStorage))
    })
})

for (const favItem of favStorage) {
    let id = favItem.id;
    document.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_fav').disabled = true;
}

for (const compItem of compStorage) {
    let id = compItem.id;
    document.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_comp').disabled = true;
}

$('.header_burger').click(function (event) {
    $('.navigation__menu').toggleClass('navigation__menu-active');
    $('.catalog_area-left').toggleClass('catalog_area-left-active');
})