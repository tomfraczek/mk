// core
var gulp = require('gulp');

// sass
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

// css + js
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var notify = require('gulp-notify');

var paths = {
    sass: './styles/**/*.scss'
};

var onError = function(err) {
    notify.onError({
        title: "Gulp error in " + err.plugin,
        Error: "<%= error.message %>"
    })(err);
    this.emit('end');
};

// SASS
gulp.task('sass', function () {
    gulp.src([paths.sass], {base: "./"})
        .pipe(plumber({errorHandler: onError}))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'IE 11'],
            remove: true,
        }))
        .pipe(gulp.dest("./"));
});

// Watch
gulp.task('watch',function() {
    gulp.watch([paths.sass], ['sass']);
});

// run sass + js watch for any more changes
gulp.task('default', ['sass', 'watch']);

