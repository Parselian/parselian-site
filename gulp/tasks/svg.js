module.exports = () => {
  $.gulp.task('svg', () => {
    return $.gulp.src('src/assets/images/svg/*')
      .pipe($.gp.svgmin({
        js2svg: {
          pretty: true
        }
      }))
      .pipe($.gp.cheerio({
        run: ($) => {
          $('[fill]').removeAttr('fill');
          $('[style]').removeAttr('style');
          $('[stroke]').removeAttr('stroke');
        },
        parserOptions: { xmlMode: true }
      }))
      .pipe($.gp.replace('$gt;', '>'))
      .pipe($.gp.svgSprite({
        mode: {
          symbol: {
            sprite: 'sprite.svg'
          }
        }
      }))
      .pipe($.gulp.dest('build/assets/images/svg/'));
  });
};