module.exports = () => {
  $.gulp.task('sass', () => {
    return $.gulp.src('src/assets/sass/main.sass') /* take .sass file */
      .pipe($.gp.sourcemaps.init()) /* initialize sourcemaps */
      .pipe($.gp.sass()) /* compiling sass into css */
      .pipe($.gp.autoprefixer({
        overrideBrowserslist: ['last 5 versions']
      }))
      .on("error", $.gp.notify.onError({
        message: "Error: <%= error.message %>",
        title: "Style error"
      }))
      .pipe($.gp.csso()) /* optimize compiled css file */
      .pipe($.gp.sourcemaps.write()) /* create sourcemaps */
      .pipe($.gulp.dest('build/assets/css/')) /* return .css file */
      .pipe($.browserSync.reload({
        'stream': true
      }));
  });
}