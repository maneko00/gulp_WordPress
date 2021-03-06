const gulp = require('gulp');
const del = require('del');

//scss
const sass = require('gulp-dart-sass'); //Dart Sass はSass公式が推奨 @use構文などが使える
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const browserSync = require("browser-sync"); //ブラウザリロード
const autoprefixer = require('gulp-autoprefixer'); //ベンダープレフィックス自動付与
const postcss = require("gulp-postcss"); //css-mqpackerを使うために必要
const mqpacker = require('css-mqpacker'); //メディアクエリをまとめる


//画像圧縮
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");


// 入出力するフォルダを指定
const srcBase = './_static/src';
const serverBase = './_server';
const distBase = './_static/dist';
const wp_Base = '../dev/wp-content/themes/template_01';


const srcPath = {
  'scss': srcBase + '/scss/**/*.scss',
  'html': srcBase + '/**/*.html',
  'img': srcBase + '/img/**/*',
  'js': srcBase + '/js/**/*.js',
  'php': srcBase + '/**/*.php',
  'font': srcBase + '/font/**/*',
};

const distPath = {
  'css': distBase + '/css/',
  'html': distBase + '/',
  'img': distBase + '/img/',
  'js': distBase + '/js/',
  'php': distBase + '/',
  'font': distBase + '/font/',
  'wp_php': distBase + '/',
  'wp_css': distBase + '/',
};

const serverPath = {
  'wp_css': serverBase + '/**/*.css',
  'wp_php': serverBase + '/**/*.php',
};

const wp_Path = {
  'css': wp_Base + '/css/',
  'html': wp_Base + '/',
  'img': wp_Base + '/img/',
  'js': wp_Base + '/js/',
  'php': wp_Base + '/',
  'font': wp_Base + '/font/',
  'wp_php': wp_Base + '/',
  'wp_css': wp_Base + '/',
};

/**
 * clean
 */
const clean = () => {
  return del(distBase + '/**');
}

//ベンダープレフィックスを付与する条件
const TARGET_BROWSERS = [
  'last 2 versions', //各ブラウザの2世代前までのバージョンを担保
  'ie >= 11' //IE11を担保
];

/**
 * sass
 *
 */

const cssSass = () => {
  return gulp.src(srcPath.scss, {
      sourcemaps: true
    })
    .pipe(
      //エラーが出ても処理を止めない
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(sass({
      outputStyle: 'expanded'
    })) //指定できるキー expanded compressed
    .pipe(autoprefixer(TARGET_BROWSERS))
    .pipe(postcss([mqpacker()])) // メディアクエリをまとめる
    .pipe(gulp.dest(distPath.css, {
      sourcemaps: './'
    })) //コンパイル先
    .pipe(gulp.dest(wp_Path.css, {
      sourcemaps: './'
    })) //コンパイル先
    .pipe(browserSync.stream())
    .pipe(notify({
      message: 'Sassをコンパイルしました！',
      onLast: true
    }))
}

/**
 * 画像圧縮
 */
const imgImagemin = () => {
  return gulp.src(srcPath.img)
    .pipe(
      imagemin(
        [
          imageminMozjpeg({
            quality: 80
          }),
          imageminPngquant(),
          imageminSvgo({
            plugins: [{
              removeViewbox: false
            }]
          })
        ], {
          verbose: true
        }
      )
    )
    .pipe(gulp.dest(distPath.img))
    .pipe(gulp.dest(wp_Path.img))
}


/**
 * html
 */
const html = () => {
  return gulp.src(srcPath.html)
    .pipe(gulp.dest(distPath.html))
    .pipe(gulp.dest(wp_Path.html))
}

/**
 * js
 */
const js = () => {
  return gulp.src(srcPath.js)
    .pipe(gulp.dest(distPath.js))
    .pipe(gulp.dest(wp_Path.js))
}


/**
 * php
 */
const php = () => {
  return gulp.src(srcPath.php)
    .pipe(gulp.dest(distPath.php))
    .pipe(gulp.dest(wp_Path.php))
}

/**
 * wp_css
 */
const wp_css = () => {
  return gulp.src(serverPath.wp_css)
    .pipe(gulp.dest(distPath.wp_css))
    .pipe(gulp.dest(wp_Path.wp_css))
}

/**
 * wp_php
 */
const wp_php = () => {
  return gulp.src(serverPath.wp_php)
    .pipe(gulp.dest(distPath.wp_php))
    .pipe(gulp.dest(wp_Path.wp_php))
}

/**
 * 独自fontをsrc配下に読み込む際の対応
 */
const font = () => {
  return gulp.src(srcPath.font)
    .pipe(gulp.dest(distPath.font))
    .pipe(gulp.dest(wp_Path.font))
}

/**
 * ローカルサーバー立ち上げ
 */
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
}

const browserSyncOption = {
  server: "./_static/dist/"
}

/**
 * リロード
 */
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
}

/**
 *
 * ファイル監視 ファイルの変更を検知したら、browserSyncReloadでreloadメソッドを呼び出す
 * series 順番に実行
 * watch('監視するファイル',処理)
 */
const watchFiles = () => {
  gulp.watch(srcPath.scss, gulp.series(cssSass))
  gulp.watch(srcPath.html, gulp.series(html, browserSyncReload))
  gulp.watch(srcPath.js, gulp.series(js, browserSyncReload))
  gulp.watch(srcPath.img, gulp.series(imgImagemin, browserSyncReload))
  gulp.watch(srcPath.php, gulp.series(php, browserSyncReload))
  gulp.watch(srcPath.font, gulp.series(font, browserSyncReload))
  gulp.watch(serverPath.wp_php, gulp.series(wp_php, browserSyncReload))
  gulp.watch(serverPath.wp_css, gulp.series(wp_css, browserSyncReload))
}

/**
 * seriesは「順番」に実行
 * parallelは並列で実行
 *
 * 一度cleanでdistフォルダ内を削除し、最新のものをdistする
 */
exports.default = gulp.series(
  clean,
  gulp.parallel(html, cssSass, js, imgImagemin, php, font, wp_php, wp_css),
  gulp.parallel(watchFiles, browserSyncFunc)
);
