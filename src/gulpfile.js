var 

gulp       = require('gulp'),
bs         = require('browser-sync').create(),
reload     = bs.reload,
sass       = require('gulp-sass'),
sourcemaps = require('gulp-sourcemaps'),
prefixer   = require('gulp-autoprefixer');

gulp.task('serve', ['sass'], function () {
    bs.init({
	proxy: "craigmacintyre.co.uk/loudondesign/"
    }); 
});

gulp.task('watch', function () {
    gulp.watch("styles/**/*.scss", ['sass']);
    gulp.watch("./*.php").on('change', reload);
});

gulp.task('sass', function () {
      console.log('Compiling SASS');
      gulp.src('./styles/style.scss')
	  .pipe(sourcemaps.init())
	  .pipe(sass().on('error', sass.logError))
	  .pipe(sourcemaps.write('./'))
	  .pipe(gulp.dest('./'))
	  .pipe(bs.stream());
});

gulp.task('prefix', function () {
    gulp.src('./style.css')
    .pipe(prefixer({
	browsers: ['last 2 versions'],
	cascade: false	
    }))	    
    .pipe(gulp.dest('./'));	    
});

gulp.task('default', ['serve', 'watch']);
