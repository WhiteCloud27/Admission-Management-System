const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel applications. By default, we are compiling the CSS
=======
 | for your Laravel application. By default, we are compiling the Sass
>>>>>>> choose-subject
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
    .sass('resources/scss/app.scss', 'public/css', [
        //
    ]);
=======
    .vue()
    .sass('resources/scss/subjectlist.scss', 'public/css');
>>>>>>> choose-subject
