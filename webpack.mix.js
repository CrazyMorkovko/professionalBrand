let mix = require('laravel-mix');

mix.browserSync({
    proxy: 'http://127.0.0.1:8080',
    files: [
        'scripts/app.js',
        'css/app.css',
        '*.html']
});

mix.react('js/app.js', 'scripts')
    .sass('sass/app.scss', 'css');
