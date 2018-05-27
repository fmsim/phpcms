require("es6-promise").polyfill();
const gulp = require("gulp"),
      sass = require("gulp-sass"),
      autoprefixer = require("gulp-autoprefixer"),
	    rename = require("gulp-rename"),
      plumber = require("gulp-plumber"),
      gutil = require("gulp-util"),
      concat = require("gulp-concat"),
      uglify = require("gulp-uglify"),
      imagemin = require("gulp-imagemin"),
      browserSync = require("browser-sync").create();

let reload = browserSync.reload;

let onError = function(err) {
  console.log("An error occured: ", gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit("end");
}

gulp.task("sass", gulp.series(function() {
  return gulp.src("./sass/**/*.scss")
  .pipe(plumber({errorHandler: onError}))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest("./css"))

}));

gulp.task("sass-admin", gulp.series(function() {
  return gulp.src("./admin/sass-admin/**/*.scss")
  .pipe(plumber({errorHandler: onError}))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest("./admin/css"))

}));

gulp.task("js", gulp.series(function() {
  return gulp.src(["./js/*.js"])
  .pipe(concat("app.js"))
  .pipe(rename({suffix: ".min"}))
  .pipe(uglify())
  .pipe(gulp.dest("./js"));
}));

gulp.task("images", gulp.series(function() {
  return gulp.src("images/src/*")
  .pipe(plumber({errorHandler: onError}))
  .pipe(imagemin({optimizationLevel: 7, progessive: true}))
  .pipe(gulp.dest("images/dest"));

}));

gulp.task("watch", gulp.series(function() {
  browserSync.init({
    files: ["./**/*.php"],
    proxy: "http://localhost/cms/"
  });
  gulp.series(function() {
    "./sass/**/*.scss", ["sass", reload];
  });
  gulp.series(function() {
    "./admin/sass-admin/**/*.scss", ["sass-admin", reload];
  });
  gulp.series(function() {
    "./js/*.js", ["js", reload];
  });
  gulp.series(function() {
    "./images/src/*", ["images", reload];
  });
}));

// default task
gulp.task("default", gulp.series(gulp.parallel("sass", "sass-admin", "js", "images", "watch"), function() {

}));
