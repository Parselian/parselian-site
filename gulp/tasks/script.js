module.exports = () => {
  $.gulp.task('scripts:lib', () => {
    return $.gulp.src(['node_modules/jquery/dist/jquery.slim.min.js',
    'node_modules/slick-carousel/slick/slick.min.js'])
      .pipe($.gp.concat('libs.min.js'))
      .pipe($.gulp.dest('build/assets/js/'))
      .pipe($.browserSync.reload({
        'stream': true
      }));
  });

  $.gulp.task('scripts', () => {
    return $.gulp.src('src/assets/js/main.js')
      .pipe($.gulp.dest('build/assets/js/'))
      .pipe($.browserSync.reload({
        'stream': true
      }));
  });
};