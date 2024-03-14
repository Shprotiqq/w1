const btnUp = document.querySelector('.button_up');

btnUp.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
})