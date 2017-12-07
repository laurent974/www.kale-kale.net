var gulp = require('gulp'),
    browserSync = require('browser-sync'), //Asynchronous browser loading
    reload = browserSync.reload,
    autoprefixer = require('gulp-autoprefixer'), //Autoprefixing
    cleanCss = require('gulp-clean-css'), // Minification CSS
    filter = require('gulp-filter'), //Enables you to work on a subset of the original files by filtering them using globbing
    uglify = require('gulp-uglify'), //Minifies JS
    imagemin = require('gulp-imagemin'), //Minifies images
    newer = require('gulp-newer'), //For passing through only those source files that are newer than corresponding destination files.
    rename = require('gulp-rename'), //Rename files
    concat = require('gulp-concat'), //Concat 2 JS files
    notify = require('gulp-notify'), //Error messages
    mmq = require('gulp-merge-media-queries'), //Combine Media queries
    runSequence = require('gulp-run-sequence'), //Run a series of dependent gulp tasks in order
    sass = require('gulp-sass'), //Convertion SCSS -> CSS
    plugins = require('gulp-load-plugins')({ camelsize: true}), //To automatically load in gulp plugins
    ignore = require('gulp-ignore'), //Helps with ignoring files/folders
    rimraf = require('gulp-rimraf'), //Helps with removing files/folders
    plumber = require('gulp-plumber'), //No stop when errors
    cache = require('gulp-cache'), //A cache proxy task for Gulp
    sourcemaps = require('gulp-sourcemaps'); //Show sourcemaps on dev

//Browser Sync
gulp.task('browser-sync', function() {
  var files = [
    '**/*.php',
    '**/*.{png,jpg,gif}'
  ];

  browserSync.init(files, {
    proxy: "http://127.0.0.1/www.kale-kale.net/",
    injectChanges: true,
    server: false
  });
});

//Style Task
gulp.task('styles', function() {
  return gulp.src('./app/style/style.scss')
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(autoprefixer('last 2 version', '> 1%', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('.'))
    .pipe(plumber.stop())
    .pipe(gulp.dest('./'))
    .pipe(filter('**/*.css'))
    .pipe(mmq())
    .pipe(reload({ stream: true }))
    // .pipe(rename({ suffix: '.min'}))
    // .pipe(cleanCss())
    // .pipe(gulp.dest('./'))
    // .pipe(reload({ stream: true }))
    .pipe(notify({ message: 'Styles Task Complete', onLast: true}));
});

//Sripts task: Vendors
gulp.task('vendorJs', function() {
  return gulp.src(['./app/js/vendor/jquery.min.js','./app/js/vendor/*.js'])
    .pipe(plumber())
    .pipe(concat('vendors.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
    .pipe(notify({ message: 'Vendor scripts task Complete', onLast: true}));
});

//Script task: Custom
gulp.task('customJs', function() {
  return gulp.src('./app/js/*.js')
    .pipe(plumber())
    .pipe(concat('custom.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
    .pipe(notify({ message: 'Custom scripts task Complete', onLast: true}));
});

//Image task
gulp.task('images', function() {
  return gulp.src(['./app/img/raw/**/*.{png,jpg,gif}'])
    .pipe(newer('./assets/img/'))
    .pipe(rimraf({ force: true }))
    .pipe(imagemin({ optimizationLevel: 7, progressive: true, interlaced: true}))
    .pipe(gulp.dest('./assets/img/'))
    .pipe(notify({ message: 'Images task Complete', onLast: true}));
});

//Clean gulp task
gulp.task('clear', function() {
  cache.clearAll();
});

//Watch task
gulp.task('default', ['styles', 'vendorJs', 'customJs', 'images', 'browser-sync'], function() {
  gulp.watch('./app/img/raw/**/*', ['images']);
  gulp.watch('./app/style/**/*.scss', ['styles']);
  gulp.watch('./app/js/**/*.js', ['customJs', browserSync.reload]);
  gulp.watch('./app/js/vendor/*.js', ['vendorJs', browserSync.reload]);
});
