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

mix.js(['resources/js/app.js'],'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles(['resources/css/style.css'],'public/css/style.css');

mix.copyDirectory('node_modules/material-kit/assets/img', 'public/images');

mix.copyDirectory('resources/images', 'public/images');
