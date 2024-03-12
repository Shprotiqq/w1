const btnCall = document.querySelector(".button_call")
const formArea = document.querySelector(".call_form")
const btnSubmit = document.querySelector('.button_phone')

btnCall.addEventListener("click", ()=> {
    if (formArea.style.display === '' || formArea.style.display === 'none') {
        formArea.style.display = 'flex';
    } else {
        formArea.style.display = 'none';
    }
})

btnSubmit.addEventListener('click', () => {
    formArea.style.display = 'none';
})