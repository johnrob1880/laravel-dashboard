var gulp = require('gulp'),
  concat = require('gulp-concat'),
  rename = require('gulp-rename'),
  vueify = require('gulp-vueify'),
  babel = require('gulp-babel');

  gulp.task('scripts', function () {
    gulp.src([
      'bower_components/jquery/dist/jquery.min.js',
      'bower_components/bootstrap/dist/js/bootstrap.min.js',
      'bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
      'bower_components/admin-lte/dist/js/adminlte.min.js'
    ]).pipe(gulp.dest('src/assets/js'));
  });

  gulp.task('css', function () {
    gulp.src([
      'bower_components/admin-lte/dist/css/adminlte.min.css',
      'bower_components/bootstrap/dist/css/bootstrap.min.css',
      'bower_components/font-awesome/css/font-awesome.min.css',
      'bower_components/ionicons/css/ionicons.min.css'
    ])
    .pipe(gulp.dest('src/assets/css'));
  });
  
  gulp.task('fonts', function () {
    gulp.src([
      'bower_components/font-awesome/fonts/**/*',
      'bower_components/ionicons/fonts/**/**'
    ]).pipe(gulp.dest('src/assets/fonts'));
  });

  gulp.task('skins', function () {
    gulp.src([
      'bower_components/admin-lte/dist/css/skins/*.min.css'
    ]).pipe(gulp.dest('src/assets/css/skins'));
  });

  gulp.task('images', function () {
    gulp.src('bower_components/admin-lte/dist/img/**/*')
    .pipe(gulp.dest('src/assets/img'));
  });

  gulp.task('default', ['scripts', 'css', 'fonts', 'skins', 'images']);