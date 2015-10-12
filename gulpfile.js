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

elixir(function(mix) {
    mix.sass('app.scss');

    /**
     *  for mainpage
     */
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'mainpage.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/mainpage.css', 'resources/assets/css');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'mainpage.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/mainpage.js', 'resources/assets/js');

    //for register page
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'auth_register.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/auth_register.css', 'resources/assets/css');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'auth_register.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/auth_register.js', 'resources/assets/js');


    //for login page
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'auth_login.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/auth_login.css', 'resources/assets/css');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'auth_login.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/auth_login.js', 'resources/assets/js');


    //for crm/orders
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'crm_orders.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/crm/crm_orders.css', 'resources/assets/css/crm');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'crm_orders.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/crm/crm_orders.js', 'resources/assets/js/crm');

    //for crm/new_user
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'crm_new_user.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/crm/crm_new_user.css', 'resources/assets/css/crm');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'crm_new_user.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/crm/crm_new_user.js', 'resources/assets/js/crm');

    //for crm/login
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'crm_login.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/crm/crm_login.css', 'resources/assets/css/crm');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'crm_login.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/crm/crm_login.js', 'resources/assets/js/crm');


    //for crm/register
    mix.styles([
        'bootstrap.min.css',
        'overall.css',
        'top.css',
        'navbar.css',
        'crm_register.css',
        'footer.css',
        'select2.min.css'
    ], 'public/css/crm/crm_register.css', 'resources/assets/css/crm');

    mix.scripts([
        'jquery-1.11.3.min.js',
        'bootstrap.min.js',
        'crm_register.js',
        'modernizr-2.6.2.min.js',
        'navbar.js',
        'select2.min.js'
    ], 'public/js/crm/register.js', 'resources/assets/js/crm');
});
