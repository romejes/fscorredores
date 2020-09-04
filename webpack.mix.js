let mix = require('laravel-mix');

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

mix
  .sass('resources/assets/sass/intranet/app.scss', 'public/css/intranet.css')
  .js('resources/assets/js/intranet/app.js', 'public/js/intranet/app.js')
  .extract([
    'admin-lte',
    '@fortawesome/fontawesome-free',
    'jquery',
    'sweetalert2',
    'jquery-validation',
    'bootstrap-table',
  ])
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'window.$'],
  });
