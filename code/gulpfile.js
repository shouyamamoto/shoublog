const gulp = require('gulp');
const sass = require('gulp-sass');

// パーシャルを一括管理
const sassGlob = require('gulp-sass-glob');

// エラーがでても監視を続行
const plumber = require('gulp-plumber');

// エラー時に通知
const notify = require('gulp-notify');

// ベンダープレフィックスを自動付与
const autoprefixer = require('gulp-autoprefixer');

// jsの圧縮
const babel = require('gulp-babel');

const { src, dest, watch } = require('gulp');


// sassコンパイル
const cssTask = () => {
    return src('./src/sass/**/*.scss', {sourcemaps: true})
        .pipe(sassGlob())
        .pipe(plumber({errorHandler: notify.onError('Error: <%= error.message %>')}))
        .pipe(autoprefixer({cascade:false}))
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(dest('../css', {sourcemaps: true}))
}

// jsコンパイル
const jsTask = () => {
    return src('./src/js/**/**', {sourcemaps: true})
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(dest('../js', {sourcemaps: true}))
}

const keiryoWatch = () => {
    watch('./src/sass/*.scss', cssTask)
    watch('./src/js/**', jsTask)
}
exports.keiryoWatch = keiryoWatch;
