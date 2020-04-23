const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
      postCss: [
         tailwindcss('./tailwind.config.js')
      ],
   }).purgeCss({
      enabled: mix.inProduction(),
      folders: ['src', 'templates'],
      extensions: ['html', 'js', 'php', 'vue'],
      whitelist: ['flex', 'flex-col', 'md:flex-row', 'items-center', 'justify-center', 'px-4', 'py-1', 'text-white', 'bg-gray-900', 'rounded', 'mr-0', 'md:mr-2', 'shadow', 'hover:bg-gray-700', 'bg-blue-600', 'rounded', 'shadow', 'hover:bg-blue-500', 'mt-2', 'md:mt-0']
   });
