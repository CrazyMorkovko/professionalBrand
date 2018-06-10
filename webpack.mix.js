let mix = require('laravel-mix');

mix.browserSync({
    proxy: false,
    server: true,
    files: [
        'scripts/app.js',
        'css/app.css',
        '*.html']
});

mix.js('js/app.js', 'scripts')
    .sass('sass/app.scss', 'css');