const btnUp = document.querySelector('.button_up');
const search = document.querySelector('.search');
const searchIcon = document.querySelector('.search-icon');

btnUp.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
})

searchIcon.onclick = function () {
    search.classList.toggle('search-active')
}