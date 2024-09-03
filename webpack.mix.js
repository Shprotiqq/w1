const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/fonts.css', 'public/css')
    .css('resources/css/simplebar.css', 'public/css')
    .css('resources/css/style.css', 'public/css')
    .css('resources/css/media.css', 'public/css')
    .css('resources/plugins/slick/slick.css', 'public/css')
    .css('resources/plugins/slick/slick-theme.css', 'public/css')
    .version()
    .sourceMaps();
