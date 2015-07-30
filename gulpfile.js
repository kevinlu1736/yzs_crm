var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(function(mix) {
    mix.sass('app.scss');
});*/

mix.styles([
        'bootstrap.min.css',
        'bootstrap-glyphicons.css',
        'mainpage.css'
        ], 'public/css/final/mainpage.css', 'public/css');

mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'mainpage.js'
        ], 'public/js/final/mainpage.js', 'public/js');
