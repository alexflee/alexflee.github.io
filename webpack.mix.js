const mix = require('laravel-mix').mix;

//run npm run watch

mix.scripts([
  'library/js/vendor/*.js',
  'library/js/libs/*.js',
  'library/js/custom/*.js'
], 'library/js/dist/main.min.js');

mix.sass('library/scss/main.scss', 'library/css/main.css')
  .options({
    processCssUrls: false
  });

  mix.browserSync({
     proxy: 'http://localhost:8888/portfolio/',
     files: [
       '*.html',
       '*.php',
       'library/**/*.js',
       'library/**/*.css'
     ]
   });

// // Hash and version files in production.
// if (mix.config.inProduction) {
//   mix.version();
// }
