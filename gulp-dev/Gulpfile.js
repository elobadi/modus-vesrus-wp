var themename = 'wp-travercy';

//load plugins
var gulp = require('gulp'),
  sass = require('gulp-sass'),
  compass = require('gulp-compass'),
  autoprefixer = require('gulp-autoprefixer'),
  minifycss = require('gulp-minify-css'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename'),
  concat = require('gulp-concat'),
  browserSync = require('browser-sync').create();

// Name of working theme folder
    src = '../' + themename + '/',
    sassSources = src + 'sass/',
    js = src + 'js/',
    img = src + 'img/',
    languages = src + 'languages/';

// var sassSources = ['_/components/scss/style.scss'];

//styles
gulp.task('styles', function() {
  return gulp.src(sassSources + '{style.scss}')
    // .pipe(plumber(plumberErrorHandler))
    .pipe(compass({
      css: src,
      sass: sassSources
      // image: '_/src/images'
    }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest(src + 'css'))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(minifycss())
    .pipe(gulp.dest(src))
    .pipe(browserSync.stream());
});

// bootstrap sass
gulp.task('sass', function() {
  return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss'])
  .pipe(sass())
  .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
  .pipe(rename({
    suffix: '.min'
  }))
  .pipe(minifycss())
  .pipe(gulp.dest(src + 'css'))
  .pipe(browserSync.stream());
});

//scripts
gulp.task('scripts', function() {
  return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
    .pipe(gulp.dest(js))
    .pipe(browserSync.stream());
});

// Watch Sass & Serve
gulp.task('serve', ['styles', 'sass'], function() {
    browserSync.init({
        open: 'external',
        proxy: 'http://localhost/projects/wp-tm/',
        port: 8080
    });

  //watch .scss files
  gulp.watch([ sassSources + '**/*.scss', 'node_modules/bootstrap/sass/bootstrap.scss'], ['styles', 'sass']);

  //watch .js files
  gulp.watch( js + '**/*.js', ['scripts']);

  //reload when a template file, the minified css, or the minified js file changes
  gulp.watch([ src + '*.php',  src + 'styles.min.css',  src + 'js/main.min.js']).on('change', browserSync.reload);
  });

// Move Fonts Folder to src
gulp.task('fonts', function(){
  return gulp.src('node_modules/font-awesome/fonts/*')
  .pipe(gulp.dest( src + "fonts"));
});

// Move Fontawesome CSS to _/src/css
gulp.task('fa', function(){
  return gulp.src('node_modules/font-awesome/css/font-awesome.min.css')
  .pipe(gulp.dest( src + 'css' ));
});

//default task
gulp.task('default', ['scripts', 'serve', 'fa', 'fonts']);
