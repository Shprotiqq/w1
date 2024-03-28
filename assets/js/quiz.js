const progressBar = document.getElementById("progress");
const variantBtn = document.querySelectorAll('.input_quiz');
const variants = []
let prev = document.querySelector(".button-prev");
let next = document.querySelector(".button-next");
const circles = document.querySelectorAll(".progress_circle");
const slides = $('.quiz_variants');
var currentStep = slides[0];
var currentSlide = 0;
let currentActive = 1;

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

variantBtn.forEach(el => {
    el.addEventListener('click', e => {
        let self = e.currentTarget;
        let variant = self.value;
        let parent = self.closest('.variants_item');
        let currentSlide = parent.closest('.quiz_variants ')
        parent.classList.add('input_quiz-active')
        currentSlide.classList.add('input_quiz-disabled')
        variants.push(variant)
        localStorage.setItem('quiz_answers', variants)

    //     currentActive++;
    //     if (currentActive > circles.length) {
    //         currentActive = circles.length;
    //     }
    //     update();
    //
    //     const number = document.querySelector("#number");
    //     number.innerHTML = Number(number.innerHTML) + 1;
    //     currentSlide++;
    //     let nextStep = slides[currentSlide];
    //     currentStep.classList.remove('quiz_variants-active');
    //     nextStep.classList.add('quiz_variants-active');
    //     currentStep = nextStep;
    })
})
prev.addEventListener("click", () => {
    currentActive--;
    if (currentActive < 1) {
        currentActive = 1;
    }
    update();

    const number = document.querySelector("#number");
    const result = Number(number.innerHTML) - 1;
    currentSlide--;
    let prevStep = slides[currentSlide];
    currentStep.classList.remove('quiz_variants-active');
    prevStep.classList.add('quiz_variants-active');
    currentStep = prevStep;
    if (result > 0) {
        number.innerHTML = result;
    }
});

next.addEventListener("click", () => {
    currentActive++;
    if (currentActive > circles.length) {
        currentActive = circles.length;
    }
    update();

    const number = document.querySelector("#number");
    number.innerHTML = Number(number.innerHTML) + 1;
    currentSlide++;
    let nextStep = slides[currentSlide];
    currentStep.classList.remove('quiz_variants-active');
    nextStep.classList.add('quiz_variants-active');
    currentStep = nextStep;
});



