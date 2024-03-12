const progressBar = document.getElementById("progress")
let prev = document.querySelector(".button-prev")
let next = document.querySelector(".button-next")
const circles = document.querySelectorAll(".progress_circle")
const choose = document.querySelectorAll(".variants_item")
let currentActive = 1

next.addEventListener("click", () => {
    currentActive++;
    if (currentActive > circles.length) {
        currentActive = circles.length;
    }
    update();
});

prev.addEventListener("click", () => {
    currentActive--;
    if (currentActive < 1) {
        currentActive = 1;
    }
    update();
});

const update = () => {
    let width = 0;
    circles.forEach((circle, index) => {
        if (index < currentActive && circles[index - 1]) {
            width += circles[index].getBoundingClientRect().x - circles[index - 1].getBoundingClientRect().x
            circle.classList.add("active")
        } else if (index !== 0) {
            circle.classList.remove("active");
        }
    });
    progressBar.style.width = width + circles[0].offsetWidth / 2 + 'px';

    if (currentActive === 1) {
        prev.disabled = true;
    } else if (currentActive === circles.length) {
        next.disabled = true
    } else {
        prev.disabled = false;
        next.disabled = false;
    }
};
prev.addEventListener("click", () => {
    const number = document.querySelector("#number");
    const result = Number(number.innerHTML) - 1;

    if (result > 0) {
        number.innerHTML = result;
    }
});

next.addEventListener("click", () => {
    const number = document.querySelector("#number");

    number.innerHTML = Number(number.innerHTML) + 1;
});

