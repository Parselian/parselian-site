module.exports = () => {
  $.gulp.task('watch', () => {
    $.gulp.watch('src/pug/**/*.pug', $.gulp.series('pug'));
    $.gulp.watch('src/assets/sass/**/*.sass', $.gulp.series('sass'));
    $.gulp.watch('src/assets/js/main.js', $.gulp.series('scripts'));
  });
}