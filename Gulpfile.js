var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    gulp.src('assets/sass/style.scss')
      .pipe(sass({
        includePaths: ['assets/sass'],
        errLogToConsole: true
      }))
      .pipe(gulp.dest('assets/css'));
});

gulp.task('bundle', ['sass']);
gulp.task('default', ['bundle']);

