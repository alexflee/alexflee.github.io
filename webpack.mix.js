const mix = require('laravel-mix').mix;

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
     proxy: 'http://localhost:8888/PERSONAL/yourhealth/your-health-website/',
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
