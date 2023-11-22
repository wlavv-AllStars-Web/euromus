const gulp = require('gulp');
const browserSync = require('browser-sync').create();

// Define the default task
gulp.task('default', () => {
  // Initialize browserSync
  browserSync.init({
    proxy: 'asd.local/', // Change this to your local PrestaShop URL
  });

  // Watch for changes in CSS files and trigger browserSync reload
  gulp.watch('themes/probusiness').on('change', browserSync.reload);
});