const btn = document.querySelector(".button_call")
let formArea = document.querySelector(".call_form")

btn.addEventListener("click", ()=> {
    formArea.classList.toggle('call_form-active');
})