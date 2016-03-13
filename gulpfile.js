'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');

gulp.task('production', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass', function () {
    gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass())
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch',function() {
    gulp.watch('sass/**/*.scss',['sass']);
});