let compStorage = []
const compData = localStorage.getItem('compare')
const btnComp = document.querySelectorAll('.button_comp');
const compList = document.querySelector('.compare_modal-list')

if (compData !== '' && compData !== null) {
    compStorage = JSON.parse(compData)
}

for (const compItem of compStorage) {
    let id = compItem.id;
    document.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_comp').classList.toggle('button_comp-active')
}

const generateCompProduct = (id, imgSrc, title) => {
    return `
    <li class="compare_list-item">
        <div class="compare_modal-item modal_item" data-id="${id}">
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

const deleteCompProducts = (productParent) => {
    productParent.remove();
};

const updateCompStorage = () => {
    localStorage.setItem('compare', JSON.stringify(compStorage));
}

btnComp.forEach(el => {
    el.addEventListener('click', e => {
        let self = e.currentTarget;
        let parent = self.closest('.catalog__card-card');
        let cardBtn = parent.querySelector('.button_comp');
        if (cardBtn.classList.contains('button_comp-active')) {
            cardBtn.classList.toggle('button_comp-active');
            let id = e.target.closest('.catalog__card-card').dataset.id;
            let index = compStorage.findIndex(el => el.id === id);
            compStorage.splice(index, 1);
            updateCompStorage();

        } else {
            cardBtn.classList.toggle('button_comp-active');
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
        }
    })
})

compList.addEventListener('click', e => {
    if (e.target.classList.contains('button_delete')) {
        deleteCompProducts(e.target.closest('.compare_list-item'))
        let id = e.target.closest('.modal_item').dataset.id;
        document.querySelector(`.catalog__card-card[data-id="${id}"]`).querySelector('.button_comp').classList.remove('button_comp-active');
        let index = compStorage.findIndex(el => el.id === id);
        compStorage.splice(index, 1);
    }

    updateCompStorage();
});

$('.button_compare').click(function () {
    $('.compare_modal').fadeIn()
    $('.simplebar-content').empty();
    var resultString = ''
    for (const compItem of compStorage) {
        let id = compItem.id;
        let imgSrc = compItem.imgSrc;
        let title = compItem.title;
        let compListItem = generateCompProduct(id, imgSrc, title);
        resultString += `${title} \r\n`
        compList.querySelector('.simplebar-content').insertAdjacentHTML("afterbegin", compListItem)
    }
     $('.compare_modal textarea').html(resultString)
})

$('.compare_modal-overlay, .button_submit, .modal-close').click(function () {
    $('.compare_modal').fadeOut();
});
