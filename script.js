const link = document.querySelector('.sublist__button')
const subList = document.querySelector('.navigation__sublist')
const arrow = document.querySelector('.button-link__arrow_1')

function sublistShow (event) {
    if (subList.classList.contains("hidden") === true) {
        subList.classList.remove("hidden");
        subList.classList.add("sublist_animation")
    } else {
        subList.classList.add("hidden");
    }
}

function reverseArrow (event) {
    if (subList.classList.contains("hidden") === false) {
        arrow.classList.add("arrow_animation-1")
    }
}

function reverseArrowReset (event) {
    if (arrow.classList.contains("arrow_animation-1") === true) {
        arrow.classList.remove("arrow_animation-1")
        arrow.classList.add("arrow_animation-2")
    } else {
        arrow.classList.remove("arrow_animation-2")
        arrow.classList.add("arrow_animation-1")
    }
}

link.addEventListener ("click", sublistShow);
link.addEventListener("click", reverseArrow);
link.addEventListener("click", reverseArrowReset)

// НЕ РАБОТАЕТ
