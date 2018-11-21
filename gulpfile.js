var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
 
var buildStyles = gulp.task('buildStyles', function () {
  var cssHandlers = [
    autoprefixer
  ];
 
  gulp.src('./src/sass/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(cssHandlers))
    .pipe(sourcemaps.write('/maps'))
    .pipe(gulp.dest('./css/'));
});
 
gulp.task('default', ['buildStyles'], function () {
 
  // Serve files from the root of this project
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
 
  gulp.watch('./src/sass/*.scss', ['buildStyles']).on('change', browserSync.reload);
});