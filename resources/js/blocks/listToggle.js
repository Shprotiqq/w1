const btnSublistToggle = document.querySelector('.sublist_button')
const subList = document.querySelector('.navigation__sublist')
const arrow = document.querySelector('.material-symbols-outlined')
const btnCatalogToggle = document.querySelector('.button_catalog')
const catalogArea = document.querySelector('.catalog_area')
const catalogBlock = document.querySelector('.catalog_block')

btnSublistToggle.addEventListener('click', () => {
    if (subList.style.display === '' || subList.style.display === 'none') {
        subList.style.display = 'block';
        arrow.classList.toggle ('material-symbols-outlined-transform');
    } else {
        subList.style.display = 'none';
        arrow.classList.remove ('material-symbols-outlined-transform')
    }
})

btnCatalogToggle.addEventListener('click', () => {
    if (catalogArea.style.display === '' || catalogArea.style.display === 'none') {
        catalogArea.style.display = 'flex';
    } else {
        catalogArea.style.display = 'none'
    }
})




