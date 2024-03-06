const link = document.querySelector('.sublist__button')
const subList = document.querySelector('.navigation__sublist')
const arrow = document.querySelector('.button-link__arrow_1')
const progress = document.getElementById("progress")
let prev = document.querySelector(".button-prev")
let next = document.querySelector(".button-next")
const circles = document.querySelectorAll(".progress_circle")
let currentActive = 1


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

next.addEventListener("click", () => {
    currentActive++;
    if (currentActive > circles.length) currentActive = circles.length;
    update();
});

prev.addEventListener("click", () => {
    currentActive--;
    if (currentActive < 1) currentActive = 1;
    update();
});

const update = () => {
    circles.forEach((circle, index) => {
        if (index < currentActive) circle.classList.add("active");
        else circle.classList.remove("active");
    });
    const actives = document.querySelectorAll(".active");
    progress.style.width =
        ((actives.length - 1) / (circles.length - 1)) * 100 + "%";
    if (currentActive === 1) prev.disabled = true;
    else if (currentActive === circles.length) next.disabled = true;
    else {
        prev.disabled = false;
        next.disabled = false;
    }
};
prev.addEventListener("click", function (){
    let number = document.querySelector("#number");
    let result = Number(number.innerHTML) - 1;
    if (result < 0) {

    } else {
        number.innerHTML = result;
    }
});

next.addEventListener("click", function (){
    let number = document.querySelector("#number");
    let result = Number(number.innerHTML) + 1;

    number.innerHTML = result;
});


