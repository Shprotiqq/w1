$(document).ready(function () {
     if ($(window).width() < 1180) {
     $('.catalog__bottom, .catalog_additional-cards, .img__gallery, .team_block, .reviews_block, .certificates-block, .discounts_block').slick();
     slidersIsLive = true
    } else {
     $('.catalog__bottom, .catalog_additional-cards, .img__gallery, .team_block, .reviews_block, .certificates-block, .discounts_block').slick('unslick');
     slidersIsLive = false;
     }
})



$('.catalog__bottom').slick({
    arrows: false,
    dots: true,
    adaptiveHeight: true,
    variableWidth: true,
    centerMode: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 3,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                slidesToShow: 1,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 380,
            settings: {
                dots: false
            }
        }
    ]
});

$('.catalog_additional-cards').slick({
    arrows: false,
    dots: true,
    adaptiveHeight: true,
    variableWidth: true,
    centerMode: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 3,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                slidesToShow: 1,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 380,
            settings: {
                dots: false
            }
        }
    ]
});

$('.img__gallery').slick({
    arrows: false,
    dots: true,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 3,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                centerMode: true,
                variableWidth: true,
                slidesToShow: 1,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 580,
            settings: {
                dots: false
            }
        }
    ]
});

$('.team_block').slick({
    arrows: false,
    dots: true,
    adaptiveHeight: true,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 3,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                slidesToShow: 2,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 580,
            settings: {
                centerMode: true,
                slidesToShow: 1,
                dots: false
            }
        }
    ]
});

$('.reviews_block').slick({
    arrows: false,
    dots: true,
    centerMode: true,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 2,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                variableWidth: true,
                slidesToShow: 1,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 580,
            settings: {
                dots: false
            }
        },
        {
            breakpoint: 460,
            settings: {
                centerMode: false,
            }
        }
    ]
});

$('.certificates-block').slick({
    arrows: false,
    dots: true,
    centerMode: true,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 2,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                variableWidth: true,
                slidesToShow: 1,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 580,
            settings: {
                variableWidth: true,
                dots: false
            }
        }
    ]
});

$('.discounts_block').slick({
    arrows: false,
    dots: true,
    centerMode: true,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
                slidesToShow: 2,
                touchThreshold: 10,
            }
        },
        {
            breakpoint: 880,
            settings: {
                variableWidth: true,
                slidesToShow: 1,
                touchThreshold: 10,
            },
        },
        {
            breakpoint: 580,
            settings: {
                dots: false,
                variableWidth: false
            }
        },
        {
            breakpoint: 460,
            settings: {
                centerMode: false,
            }
        }
    ]
});



//     /* Слайдер */
//     .slick-slider{}
// /* Слайдер запущен */
// .slick-slider.slick-initialized{}
// /* Слайдер с точками */
// .slick-slider.slick-dotted{}
// /* Ограничивающая оболочка */
// .slick-list {}
// /* Лента слайдов */
// .slick-track{}
// /* Слайд */
// .slick-slide{}
// /* Слайд активный (показывается) */
// .slick-slide.slick-active{}
// /* Слайд основной */
// .slick-slide.slick-current{}
// /* Слайд по центру */
// .slick-slide.slick-center{}
// /* Клонированный слайд */
// .slick-slide.slick-cloned{}
// /* Стрелка */
// .slick-arrow{}
// /* Стрелка влево */
// .slick-arrow.slick-prev{}
// /* Стрелка вправо */
// .slick-arrow.slick-next{}
// /* Стрелка не активная */
// .slick-arrow.slick-disabled{}
// /* Точки (булиты) */
// .slick-dots{}
// .slick-dots li{}
// /* Активная точка */
// .slick-dots li.slick-active{}
// /* Элемент точки */
// .slick-dots li button{}