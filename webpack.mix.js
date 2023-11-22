const mix = require('laravel-mix');
const path = require('path');


mix.js('resources/js/main.js', 'public/js/main.js')
   .vue({ version: 3 })
   .postCss('resources/css/app.css', 'public/css', [
       require('postcss-import'),
       require('tailwindcss'),


   ])
   .version();

mix.webpackConfig({
    resolve: {
      alias: {
        '@': path.resolve(__dirname, 'src'),
      },
    },
});
