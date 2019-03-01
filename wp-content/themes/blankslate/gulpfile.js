var gulp = require('gulp'),
	 sass = require('gulp-sass'),
	 bourbon = require('bourbon').includePaths,
	 browserSync = require('browser-sync').create();

var paths = {
  scss: ["./assets/scss/**/*.scss"],
  bourbon: ["./node_modules/bourbon/**/*.scss"]

};

gulp.task("sass", function () {
  return gulp.src(paths.scss)
    .pipe(sass({
        sourcemaps: true,
        includePaths: [bourbon]
    }))
    //.pipe(autoprefix("last 2 versions"))
    .pipe(gulp.dest("./assets/css"))
   ;
});


// Static server
gulp.task('browserSync', function() {
    browserSync.init({
        server: { localhost:666,
            baseDir: "./"
        }
    });
});

gulp.task("default", ["sass", "browserSync"], function() {
  gulp.watch(paths.scss, ["sass", "bourbon"])
});