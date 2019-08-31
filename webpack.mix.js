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

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps()
}

mix.sourceMaps(false, 'source-map')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/client.scss', 'public/css')
    .sass('resources/assets/sass/datatables.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/datatables.js', 'public/js')
    .extract([
        'jquery',
        'bootstrap',
        'admin-lte',
        'select2',
        'moment',
        'daterangepicker'
    ])
    .autoload({
        jquery: ['$', 'jQuery', 'jquery']
    });
