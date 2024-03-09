const link = document.querySelector('.sublist__button')
const subList = document.querySelector('.navigation__sublist')
const arrow = document.querySelector('.material-symbols-outlined')



function sublistShow () {
    if (subList.classList.contains("hidden") === true) {
        subList.classList.remove("hidden");
        arrow.classList.toggle("material-symbols-outlined-transform-transform")
    }
}

function reverseArrowReset () {
    if (arrow.classList.contains("material-symbols-outlined-transform") === true) {
        arrow.classList.remove("material-symbols-outlined-transform")
    }
}


link.addEventListener ("click", sublistShow);
link.addEventListener("click", reverseArrowReset)

// НЕ РАБОТАЕТ



