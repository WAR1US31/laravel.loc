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

// mix.js([
//     'resources/front/js/bootstrap.bundle.js',
//     'resources/front/js/bootstrap.esm.js',
//     'resources/front/js/bootstrap.js'
//     ], 'public/js/scrips.js')
//     .postCss([
//         'resources/front/css/bootstrap.css',
//         'resources/front/css/main.css'
//     ], 'public/css/style.css');

mix.js('resources/front/js/bootstrap.bundle.js', 'public/js')
    .postCss('resources/front/css/bootstrap.css', 'public/css');

mix.js('resources/front/js/bootstrap.esm.js', 'public/js')
    .postCss('resources/front/css/main.css', 'public/css');

mix.js('resources/front/js/bootstrap.js', 'public/js')

mix.copyDirectory('resources/front/img', 'public/img')
