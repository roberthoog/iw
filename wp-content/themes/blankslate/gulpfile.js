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
    .pipe(gulp.dest("./assets/css/styles.css"))
   ;
});

browserSync
// watch PHP files change
var src = {
   php:'./wp-content/**/*.php',
};


gulp.task('php', function(){
    gulp.src(src.php)
    .pipe(reload({stream:true}));
});


gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
     
 }
    });
});


gulp.task('BrowerSync', function() {
    BrowerSync.init({
        proxy: "localhost:666"
    });
});

gulp.task('browserSync', function() {
    browserSync.init({
        server: { localhost:666,
            baseDir: "http://localhost:666/iw/",
                target: "localhost:666", // can be [virtual host, sub-directory, localhost with port]

        }
    });

});

gulp.task("default", ["sass", "browserSync"], function() {
  gulp.watch(paths.scss, ["sass", "bourbon"])
});