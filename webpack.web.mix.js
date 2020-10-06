const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

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
  .sass('resources/assets/sass/web/app.scss', 'public/css/web.css')
  .js('resources/assets/js/web/app.js', 'public/js/web')
  .extract([
    'jquery',
    'bootstrap',
    '@fortawesome/fontawesome-free',
    'sweetalert2',
    'jquery-validation',
    'axios',
    'moment',
    'smartwizard',
    'imask',
    'bs-custom-file-input',
    'load-google-maps-api',
    'aos',
    '@splidejs/splide',
  ])
  .mergeManifest()
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'window.$'],
  })

  /*
  .options({
    postCss: [
      require('autoprefixer')({
        browsers: ['last 40 versions'],
      }),
    ],
  });
  */