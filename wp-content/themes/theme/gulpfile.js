/*
  ** gulp tasks gonfigration file
  ** created by Ahmad Gharaibeh [Github] @ahmadFox
  ** declear gulp packegs
*/
const gulp = require("gulp"),
      postcss = require( "gulp-postcss" ),
      tailwindcss = require( "tailwindcss" ),
      scss = require("gulp-sass")(require("sass")),
      cleanCSS = require('gulp-clean-css'),
      iconfont = require('gulp-iconfont'),
      iconfontCss = require('gulp-iconfont-css'),
      rtlcss = require("gulp-rtlcss"),
      webp = require('gulp-webp'),
      runTimestamp = Math.round(Date.now()/1000),
      sourcemaps = require("gulp-sourcemaps"),
      rename = require("gulp-rename"),
      browserSync = require("browser-sync").create(),
      webpack = require("webpack-stream"),
      compiler = require("webpack");

/*
  ** declared apatchy server
  ** for browserSync will open on localhost:3000
*/
const URl = "http://localhost:8000/";


/*
  ** declared path for source file
  ** all assets iclude (html, scss, images, javascripts)
*/
const path = {
  php: {
    src: "*/**/*.php",
  },
  scss: {
    src: "src/scss/**/*.scss",
    dest: "dist/css/",
  },
  script: {
    src: "src/js/**/*.js",
    dest: "dist/js/",
  },
  image: {
    src: "src/img",
    dest: "dist/image/",
  },
  icon: {
    src: "src/svg/*.svg",
    dest: "dist/",
    css: "src/scss/fonts/"
  },
  font: {
    src: "src/font/",
    dest: "dist/fonts/"
  }
};


/*
 ** gulp task for reload any changes on php files
 */
gulp.task("php", function () {
  return gulp
  .src(path.php.src)
  .pipe(browserSync.stream());
  
});

/*
 ** gulp task for scss combiler
 **
 */
 gulp.task("scss", function () {
  return gulp
  .src(path.scss.src)
  .pipe(scss().on('error', scss.logError))
  .pipe(postcss([
      tailwindcss('./tailwind.config.js'),
      require('autoprefixer'),
  ]))
  .pipe(gulp.dest(path.scss.dest))
    .pipe(rtlcss()) // Convert to RTL.
    .pipe(rename({ suffix: "-rtl" }))
    .pipe(gulp.dest(path.scss.dest))
    .pipe(browserSync.stream());
});

/*
 ** gulp task for scss combiler
 **
 */
gulp.task("script", function () {
  return gulp
    .src("src/js/app.js")
    .pipe(
      webpack(
        {
          devtool: "source-map",
        },
        compiler,
        function (err, stats) {
          /* Use stats to do more things if needed */
        }
      )
    )
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(gulp.dest(path.script.dest));
});


/*
  ** Gulp task for manage site images
  ** Create by Ahmad Gharaibeh [ Github ] : @ahmadFox
*/
 gulp.task("image", function () {

  // Covert images to webp and optimize
  const convetImg =  gulp
    .src([ `${path.image.src}/**/**/*.{jpeg,jpg,png,tiff,webp}` , `!${path.image.src}/favicons/*` ])
    .pipe(webp({quality: 100}))
    .pipe(gulp.dest(path.image.dest));

  // Move [excludes images/files/folder] without convert to .webp
  const moveFavicon = gulp
    .src([ `${path.image.src}/**/**/*.{svg,mp4}`, `${path.image.src}/favicons/*`], { base: `${path.image.src}` })
    .pipe(gulp.dest(`${path.image.dest}`));

  return convetImg, moveFavicon;

 });


/*
  ** Gulp task gulp task for convert SVG icons to fornt icons and genarate SCSS font file
  ** Create by Ahmad Gharaibeh [ Github ] : @ahmadFox
*/
gulp.task('icons', function(){

  const iconFontName = 'font-icons';
  return gulp
    .src(path.icon.src)
    .pipe(iconfontCss({
      fontName: iconFontName,
      path: `${path.icon.css}/templet/_icons-templet.scss`,
      targetPath: './_font-icon.scss',
      fontPath: '../fonts/',
      cssClass: 'icon'
    }))
    .pipe(iconfont({
      fontName: iconFontName, // required
      prependUnicode: true, // recommended option
      fontHeight: 1001,
      normalize:true,
      formats: ['ttf', 'eot', 'woff', 'svg', 'woff2'], // default, 'woff2' and 'svg' are available
      timestamp: runTimestamp, // recommended to get consistent builds when watching files
    }))
    .pipe(gulp.dest(path.icon.css));

});


gulp.task('fonts', function(){

  // move text font from src to dist
  const fontTextFiles = gulp
    .src(`${path.font.src}/*.{svg,ttf,woff,woff2,eot}`)
    .pipe(gulp.dest(path.font.dest));

  // move icon font from src to dist
  const fontIconsFiles = gulp
    .src(`${path.icon.css}/*.{svg,ttf,woff,woff2,eot}`)
    .pipe(gulp.dest(path.font.dest))
    
  return fontTextFiles, fontIconsFiles;

});


/*
 ** build and minify css and fontsbit
 */
gulp.task("cssMinify", function () {
  return gulp
    .src(['dist/css/main.css', 'dist/css/main-rtl.css'])
    .pipe(cleanCSS())
    .pipe(rename({
      suffix: '.min',
    }))
    .pipe(gulp.dest(path.scss.dest))
});

/*
 ** build and minify js
 */
gulp.task("jsMinify", function () {
  return gulp
    .src("dist/js/main.js")
    .pipe(rename({
      suffix: '.min',
    }))
    .pipe(gulp.dest(path.script.dest));
});

/*
 ** gulp task for watch and concat all gulp task
 ** in this case we use proxy server no need to create new sever
 */
gulp.task("server", function () {
  browserSync.init({
    proxy: URl,
  });

  gulp.watch(path.php.src, gulp.series("php"));
  gulp.watch(path.scss.src, gulp.series("scss"));
  gulp.watch(path.script.src, gulp.series("script"));
  gulp.watch(path.image.src, gulp.series("image"));
  gulp.watch('src/svg/', gulp.series("icons"));
  gulp.watch('src/font/', gulp.series("fonts"));
  gulp.watch("src/").on("change", browserSync.reload);
  gulp.watch("./**/*.php", gulp.series("scss")).on("change", browserSync.reload);

});


/*
 ** gulp callback series
 ** this spride and compined [gulp callback series] you can use them in packeg.json
 */

gulp.task("icons", gulp.series( "icons"));

gulp.task("fonts", gulp.series( "fonts"));

gulp.task("sass", gulp.series( "scss"));

gulp.task("script", gulp.series( "script"));

gulp.task("image", gulp.series( "image"));

gulp.task("serve", gulp.series( "server"));

gulp.task("default", gulp.series( "icons", "fonts", "scss", "script", "image", "php", "server"));

gulp.task("build", gulp.series( "icons", "fonts", "scss", "script", "image"));

gulp.task("optimize", gulp.series("cssMinify", "jsMinify"));