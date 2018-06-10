let mix = require('laravel-mix');

mix.js('js/app.js', 'scripts')
    .sass('sass/app.scss', 'css');