let mix = require('laravel-mix');

mix.babelConfig({
    "plugins": [
        ["@babel/plugin-proposal-decorators", { "legacy": true}],
        ["@babel/plugin-proposal-class-properties", { "loose": true}]
    ]
});

mix.browserSync({
    proxy: 'http://127.0.0.1:8080',
    files: [
        'public/scripts/app.js',
        'public/css/app.css',
        'views/*.php']
});

mix.react('assets/js/app.js', 'public/scripts')
    .sass('assets/sass/app.scss', 'public/css');
