const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 | for your Laravel applications. By default, we are compiling the CSS
=======
 | for your Laravel application. By default, we are compiling the Sass
>>>>>>> choose-subject
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> 6cfd31f115c4c44bee760c3d25939175483471ee
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> FAQ
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    .sass('resources/scss/app.scss', 'public/css', [
        //
    ]);
=======
    .vue()
    .sass('resources/scss/subjectlist.scss', 'public/css');
>>>>>>> choose-subject
=======
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> 6cfd31f115c4c44bee760c3d25939175483471ee
=======
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> FAQ
