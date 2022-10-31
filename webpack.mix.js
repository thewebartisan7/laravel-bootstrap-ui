const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const glob = require('glob');

if (!mix.inProduction()) {
    mix
        .webpackConfig({
            devtool: 'source-map',
        })
        .sourceMaps();
} else {
    mix.options({
        clearConsole: true,
        terser: {
            terserOptions: {
                compress: {
                    drop_console: true,
                },
            },
        },
    });
}

// Helpers for retrieve JS/SCSS files

const files = pattern => glob.sync(pattern, {
    cwd: 'resources',
    ignore: [
        "**/_*", // Exclude files starting with '_'
    ]
});

const compileSkins = (pattern, output) => {
    files(pattern).forEach((path) => {
        mix.sass(`resources/${path}`, output, {
            implementation: require('node-sass'),
        })
            .purgeCss({
                content: [
                    "resources/views/**/*.php",
                    "storage/framework/views/*.php",

                    "vendor/laraloop/ui/resources/views/**/*.php",
                    "vendor/laraloop/ui/stubs/resources/views/**/*.php",

                    "packages/laraloop/ui/resources/views/**/*.php",
                    "packages/laraloop/ui/stubs/resources/views/**/*.php",
                ]
            })
            .options({
                processCssUrls: false
            });
    })
};

compileSkins('sass/*.scss', 'css');
//compileJs('js/*.js', 'js', 'js');

// JavaScript

mix.js('resources/js/app.js', 'js');

mix.setPublicPath('public')
    .version();
