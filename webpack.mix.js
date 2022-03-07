const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.styles([
    'public/css/custom.css',
    'public/css/bootstrap.css',
    'public/css/continuous-carousel.css',
    'public/css/font.css',
    'public/css/customfont.css',
],
    'public/css/combine.css').version();

mix.scripts([
    'public/js/bootstrap.bundle.js',
    'public/js/jquery.rcbrand.js',

],
    'public/js/combine.js').version();

