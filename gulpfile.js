"use strict";
var gulp = require("gulp"),
browserSync = require('browser-sync').create(),
  autoprefixer = require("gulp-autoprefixer"),
  sass = require('gulp-sass')(require('sass')),
  sassUnicode = require('gulp-sass-unicode'),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify"),
  rename = require("gulp-rename"),
  sourcemaps = require("gulp-sourcemaps"),
  notify = require("gulp-notify"),
  plumber = require("gulp-plumber");

var paths = {
  styles: {
    src: ["src/scss/*.scss"],
    dest: "assets/css",
  },
  scripts: {
    src: [
      "node_modules/jquery/dist/jquery.min.js", 
      "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
      "node_modules/nouislider/dist/nouislider.min.js",
      "node_modules/fecha/dist/fecha.min.js",
      "node_modules/hotel-datepicker/dist/js/hotel-datepicker.min.js",
      "node_modules/gsap/dist/gsap.min.js",
      "node_modules/gsap/dist/ScrollTrigger.min.js",
      "node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js",
      "node_modules/swiper/swiper-bundle.js",
      "src/js/guests.js",
      "src/js/app.js",
    ],
    dest: "assets/js",
  }, 
};

var onError = function (err) {
  notify().write(err);
  this.emit("end");
};

function styles() {
  return gulp
    .src(paths.styles.src)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(sassUnicode())
    .pipe(autoprefixer("last 4 versions"))
    .pipe(
      rename({
        basename: "app",
      })
    )
    .pipe(sourcemaps.write(""))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

function scripts() {
  return (
    gulp
      .src(paths.scripts.src, { sourcemaps: true })
      .pipe(plumber({ errorHandler: onError }))
      //.pipe(uglify())
      .pipe(concat("app.js"))
      .pipe(gulp.dest(paths.scripts.dest))
      .pipe(browserSync.stream())
  );
}

function watch() {
  browserSync.init({
     proxy: "server/varefamily-html/"
  });
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles).on('change', browserSync.reload);
  gulp.watch("./*.php", styles).on('change', browserSync.reload);
}

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;

gulp.task("default", watch);

