$('.search-button').on('click', function (e) {
    $('.search-area').toggleClass('search-area-active');
    $('.compare, .favorites').toggle('slow');
});

// $(document).on('click', function (e) {
//     if (document.querySelector('.search-area').classList.contains('search-area-active') && !e.target.classList.contains('search')) {
//         $('.compare, .favorites').toggle('slow');
//         document.querySelector('.search-area').classList.remove('search-area-active')
//     }


