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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/product_overview.js', 'public/js')
    .js('resources/js/summary.js', 'public/js');

mix.js('resources/js/bootstrap.js', 'public/js');
mix.styles('resources/css/css.css', 'public/css/all.css');

mix.js('resources/js/shoppingcart.js', 'public/js');

