const gulp = require('gulp');

gulp.task('default', gulp.parallel('serve:asm', 'serve:asd'));

gulp.task('serve:asm', (done) => {
  const bs = require('browser-sync').create();
  bs.init({
    proxy: 'http://asm.local',
    port: 3001,
    host: '192.168.1.64',
  });

  gulp.watch('themes/ebusiness/**/*.*').on('change', bs.reload);
  done();
});

gulp.task('serve:asd', (done) => {
  const bs = require('browser-sync').create();
  bs.init({
    proxy: 'http://asd.local',
    port: 4001,
    host: '192.168.1.64',
  });

  gulp.watch('themes/probusiness/**/*.*').on('change', bs.reload);
  done();
});
