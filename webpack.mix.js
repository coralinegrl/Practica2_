const mix = require('laravel-mix');

mix.js('resources/js/main.js', 'public/js/main.js')
   .vue({ version: 3 })
   .postCss('resources/css/app.css', 'public/css', [
       require('postcss-import'),
       require('tailwindcss'),

   ])
   .version();
