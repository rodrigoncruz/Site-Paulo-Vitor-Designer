const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');

function compilaSass() {
    return gulp.src('styles/scss/*.scss')
    .pipe(sass({outputStyle : 'compressed'}))
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('styles/css'));
}

function watch() {
    gulp.watch('styles/scss/*.scss', compilaSass);
}

gulp.task('sass', compilaSass);
gulp.task('default', watch);
