# wp-docker-tailwind

Docker environment to build modern, fast and optimize Wordpress themes using Gulp.js for compiling assets with Tailwind css configuration.


## Features

- Initialize the WordPress project using a Docker image.
- Build a modern WordPress theme using ES6 modules and Tailwind CSS.
- Fast and lightweight code.
- Optimize images by converting image files from (.png, .jpg, .jpeg) to .webp.
- Convert SVG file icons to CSS fonts.
- Enable live reload in the browser when saving code in all files (php, html, css, js).
- Support for RTL (right-to-left) and LTR (left-to-right) languages.
- JavaScript libraries (aos animation, lazysize image, swiper.js).


## Deployment

To deploy this reposotory, navegate to "wp-content/themes/theme" run the folowing command on your CMD or shell:

```bash
  npm install --save-dev
```

All requaired packeges will installed in node_module file 

- for start run the folowing command:
```bash
  $gulp
```
Will run the local server and lunch browser on url: http://localhost:3000.
this command will run the folowing task :
"icons", "fonts", "scss", "script", "image", "php", "server"

- for one tim run and build Frontend assets, run the command:
```bash
  $gulp build
```

- for compress css files, and js with opimization, run the folowing command:
```bash
  $gulp optimize
```

## Tech Stack

**Client:** php, html, ES6, TailwindCSS

**Server:** Wordpress, phpMyAdmin, SQL


## 🚀 About Me
My name is AHMAD GHARAIBEH/
I'm a senior full stack developer with +8 years expreiance in (html, css, js, php, node.js,express, sql, mongo db, scss, webpack, gulp, wordpress, docker, react.js, next.js,redux) and more librarys and framwork to build modren, fast, conveniant web and mobile apps./

- [@AhmadFox](https://github.com/AhmadFox)
- [Linkedin](https://www.linkedin.com/in/dev-ahmad-gharaibeh)


