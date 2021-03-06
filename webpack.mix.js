const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('resources/js/app.js', 'public/js');
mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/jquery-migrate-3.0.1.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.easing.1.3.js',
    'resources/js/jquery.waypoints.min.js',
    'resources/js/jquery.stellar.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/aos.js',
    'resources/js/jquery.animateNumber.min.js',
    'resources/js/bootstrap-datepicker.js',
    'resources/js/jquery.timepicker.min.js',
    'resources/js/scrollax.min.js',
    'resources/js/google/map.js',
    'resources/js/main.js'
], 'public/js/all.js');
mix.styles([
    'resources/css/*.css'
], 'public/css/app.css');
