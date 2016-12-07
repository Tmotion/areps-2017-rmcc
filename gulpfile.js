var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

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
    mix.sass([
            'bulma.scss',
            '../../../node_modules/jquery-peek-a-bar/src/scss/peekabar.scss',
            'index.scss'
        ], 'public/css/application.css')
        .scripts([
            '../../../node_modules/jquery/dist/jquery.js',
            '../../../node_modules/jquery-smooth-scroll/src/jquery.smooth-scroll.js',
            '../../../node_modules/vue/dist/vue.js',
            '../../../node_modules/lodash/lodash.js',
            '../../../node_modules/jquery-peek-a-bar/src/js/peekabar.js',
            'bauten.js',
            'application.js'
        ], './public/js/application.js');
});