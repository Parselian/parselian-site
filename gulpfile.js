'use-strict';

global.$ = {
  gulp: require('gulp'),
  gp: require('gulp-load-plugins')(),
  browserSync: require('browser-sync').create(),

  path: {
    tasks: require('./gulp/path/tasks.js')
  }
};

/* activation each task in tasks array */
$.path.tasks.forEach(taskPath => {
  require(taskPath)();
});

$.gulp.task('default', $.gulp.series(
  $.gulp.parallel('pug', 'sass', 'scripts:lib', 'scripts', 'img:dev'),
  $.gulp.parallel('watch', 'serve')
));

$.gulp.task('build', $.gulp.series(
  $.gulp.parallel('pug', 'sass', 'css-transfer', 'scripts:lib', 'scripts', 'img:build'),
  $.gulp.parallel('watch', 'serve')
));














