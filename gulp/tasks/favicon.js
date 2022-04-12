module.exports = () => {
  $.gulp.task('favicon', () => {
    return $.gulp.src('src/favicon.ico')
      .pipe($.gulp.dest('build/'));
  });
}