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
    mix.sass(['materialize.scss', 'style.scss', 'custom/custom.scss', 'theme-components/layouts/style-fullscreen.scss'], 'public/css/main.css');
    mix.scripts(['materialize.js', 'plugins.js', 'custom-script.js'], 'public/js/main.js');
});
