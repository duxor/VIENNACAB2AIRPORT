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

require('laravel-elixir-uncss');

elixir(function(mix) {
    /*mix.sass('app.scss');*/
    /*mix.uncss('style.css', {
        html: ['http://localhost:8000/kontakt']
    },'public/css-un');

    mix.styles([
        '../../../public/css-un/style.css'
    ],'public/css/kontakt.css');*/
    mix.uncss('bootstrap.min.css', {
        html: ['http://localhost:8000/kontakt']
    },'resources/assets/css-un');
    mix.styles([
        '../css-un/bootstrap.min.css'
    ],'public/css/kontakt.css');

    mix.uncss('bootstrap.min.css', {
        html: ['http://localhost:8000']
    },'resources/assets/css-un');

    mix.styles([
        '../css-un/bootstrap.min.css'
    ],'public/css/index.css');
});
