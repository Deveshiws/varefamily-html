"use strict";
var gulp = require("gulp"),
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
      "node_modules/fecha/dist/fecha.min.js",
      "node_modules/hotel-datepicker/dist/js/hotel-datepicker.min.js",
      "node_modules/@fancyapps/ui/dist/fancybox.umd.js",
      "node_modules/dayjs/dayjs.min.js",
      "node_modules/jquery-freeze-table/dist/js/freeze-table.min.js",
      "node_modules/clipboard/dist/clipboard.js",
      // "node_modules/select2/dist/js/select2.min.js",
      "src/js/jquery.overlayScrollbars.min.js",
      "src/js/bootstrap-multiselect.js",
      "src/js/bootstrap-autocomplete.js",
      "node_modules/isotope-layout/dist/isotope.pkgd.min.js",
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
    .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
  return (
    gulp
      .src(paths.scripts.src, { sourcemaps: true })
      .pipe(plumber({ errorHandler: onError }))
      //.pipe(uglify())
      .pipe(concat("app.js"))
      .pipe(gulp.dest(paths.scripts.dest))
  );
}

function watch() {
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles);
}

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;

gulp.task("default", watch);

