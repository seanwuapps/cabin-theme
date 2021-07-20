var gulp = require("gulp");
var rename = require("gulp-rename");

// gulp task copy js files
gulp.task("js", function () {
  return gulp
    .src("./dist/app.*.js")
    .pipe(rename("app.js"))
    .pipe(gulp.dest("./dist/js"));
});

gulp.task(
  "default",
  gulp.parallel("js", function () {
    return gulp
      .src("./dist/app.*.css")
      .pipe(rename("app.css"))
      .pipe(gulp.dest("./dist/css"));
  })
);
