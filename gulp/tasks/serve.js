module.exports = () => {
  $.gulp.task('serve', () => {
    $.browserSync.init({
      server: {
        baseDir: './build/'
      }
    });
  });
}