const mix = require('laravel-mix')
const path = require('path')
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
let src_path = 'resources/js/'

mix.webpackConfig({
    resolve: {
        alias: {
            '@src': path.resolve(__dirname, src_path),
            '@store': path.resolve(__dirname, src_path + 'store/'),
            '@pages': path.resolve(__dirname, src_path + 'pages/'),
            '@components': path.resolve(__dirname, src_path + 'components/')
        }
    }
})
mix.js('resources/js/app.be.js', 'public/js').vue()
mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
