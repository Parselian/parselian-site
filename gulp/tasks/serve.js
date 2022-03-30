module.exports = () => {
  $.gulp.task('serve', () => {
    $.browserSync.init({
      proxy: {
        target: 'http://newparselian.dev'
      }
    });
  });
}