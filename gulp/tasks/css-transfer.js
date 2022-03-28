module.exports = () => {
  $.gulp.task('css-transfer', () => {
    return $.gulp.src('./src/assets/css/*.css')
      .pipe($.gulp.dest('./build/assets/css/'));
  });
};