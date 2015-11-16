var gulp 		= require("gulp");
var jsmin 		= require('gulp-jsmin');
var concatJS 	= require('gulp-concat');
var rename 		= require("gulp-rename");
var minifyCSS 	= require('gulp-mini-css');
var notify 		= require('gulp-notify');
var minifyHTML 	= require('gulp-minify-html');

gulp.task("defaultJS", function() {

	return gulp.src([
				"js/jquery-1.11.3.min.js", 
				"js/jquery.easing.1.3.min.js",
				"js/jquery.mousewheel.min.js",
				"js/owl.carousel.min.js",
				"js/jquery.fancybox.pack.js",
				"js/jquery.fancybox-buttons.js",
				"js/jquery.fancybox-thumbs.js",
				"js/jquery.fancybox-media.js",
				"js/owl.carousel.js",
				"js/jquery.scrollbar.min.js",
				"js/executive.js"
			])
	.pipe(concatJS("all.js"))
	.pipe(jsmin())
	.pipe(rename("all.min.js"))
	.pipe(gulp.dest("app/js/"))
	.pipe(notify("DONE JS!!!"))
});

gulp.task("defaultCSS", function(){
	gulp.src("css/style.css")
	.pipe(minifyCSS())
	.pipe(rename("style.min.css"))
	.pipe(gulp.dest("app/css/"))
	.pipe(notify("DONE!!!"))
});


gulp.task('minify-html', function() {
  var opts = {conditionals: true,spare:true};
  return gulp.src('index.html')
    .pipe(minifyHTML(opts))
    .pipe(rename("min-index.html"))
    .pipe(gulp.dest('./'));
});

gulp.task("watch", function(){
	gulp.watch("css/*.css",["defaultCSS"])
	gulp.watch("*.html",["minify-html"])
	gulp.watch("js/*.js",["defaultJS"])
});

