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
        'public/admin/js/app.js',
        'public/admin/css/app.css',
        'views/*.php']
});

mix.react('assets/admin/js/app.js', 'public/admin/js')
    .sass('assets/admin/sass/app.scss', 'public/admin/css');
