const btnCall = document.querySelector(".button_call")
const formArea = document.querySelector(".call_form")
const btnSubmit = document.querySelector('.button_phone')
const btnCallBottom =document.querySelector('.button-contacts')
const formAreaBottom = document.querySelector('.call_form-bottom')
const btnSubmitBottom = document.querySelector('.button_phone-bottom')

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

btnCallBottom.addEventListener("click", ()=> {
    if (formAreaBottom.style.display === '' || formAreaBottom.style.display === 'none') {
        formAreaBottom.style.display = 'flex';
    } else {
        formAreaBottom.style.display = 'none';
    }
})

btnSubmitBottom.addEventListener('click', () => {
    formAreaBottom.style.display = 'none';
})

