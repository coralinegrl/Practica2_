const mix = require('laravel-mix');

mix.js('resources/js/main.js', 'public/js/main.js')
   .vue({ version: 3 }) // Habilita el soporte para Vue 3
   .postCss('resources/css/app.css', 'public/css', [
       require('postcss-import'),
       require('tailwindcss'),
       // Añade aquí otros plugins de PostCSS si es necesario.
   ])
   .version(); // Versiona tus assets para producción (se usa normalmente solo en producción)
