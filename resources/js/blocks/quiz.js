const progressBar = document.getElementById("progress");
const variantBtn = document.querySelectorAll('.input_quiz');
let prev = document.querySelector(".button-prev");
let next = document.querySelector(".button-next");
const circles = document.querySelectorAll(".progress_circle");
const currentField = document.querySelectorAll('.quiz_variants')
const slides = $('.quiz_variants');
var currentStep = slides[0];
var currentSlide = 0;
let currentActive = 1;
const result = {};

next.disabled = true
$('.input_quiz').on('click', function(event) {
    const fieldset = $(event.target).closest('fieldset')
    $(fieldset).find('.variants_item').removeClass('input_quiz-active')
    $(event.target).closest('.variants_item').toggleClass('input_quiz-active')
    if (!currentStep.classList.contains('quiz_variants__last-page')) {
        next.disabled = false
        setTimeout(() => {
            nextSlide();
            if ($('.quiz_variants-active').hasClass('quiz_variants__last-page')) {
                $('.quiz_buttons').hide()
                $('.prize_item svg').remove()
                $('.prize_item').css('padding-left', '30px')

                var resultString = ''

                for (question in result) {
                    resultString += `${question}: ${result[question]} \r\n`
                }
                $('.quiz_variants__last-page textarea').html(resultString)

            }
        }, 300);
    } else {
        return;
    }


})

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
        next.classList.add ('button-next-final');
        next.disabled = true;
    } else {
        prev.disabled = false;
        next.classList.remove('button-next-final');
        next.disabled = false;
    }
};

const nextSlide = () => {
    currentActive++;
    if (currentActive > circles.length) {
        currentActive = circles.length;
    }
    update();
    const variant = $(slides[currentSlide]).find('.quiz_number span').html()
    const value = $(slides[currentSlide]).find('.input_quiz-active input').val()
    result[variant] = value;

    currentSlide++;
    let nextStep = slides[currentSlide];
    currentStep.classList.remove('quiz_variants-active');
    nextStep.classList.add('quiz_variants-active');
    currentStep = nextStep;
    next.disabled = true;
}

prev.addEventListener("click", () => {
    currentActive--;
    if (currentActive < 1) {
        currentActive = 1;
    }
    update();

    currentSlide--;
    let prevStep = slides[currentSlide];
    currentStep.classList.remove('quiz_variants-active');
    prevStep.classList.add('quiz_variants-active');
    currentStep = prevStep;
});

next.addEventListener("click", () => {
    nextSlide();
});



