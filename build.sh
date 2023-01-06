#!/bin/sh
npx sass ./src/sass/style.scss ./public/wp-content/themes/ben/style.css
cp ./src/index.html ./public/wp-content/themes/ben/
cp ./src/favicons/*.* ./public/wp-content/themes/ben/
cp -R ./src/images ./public/wp-content/themes/ben/
cp -R ./src/fonts ./public/wp-content/themes/ben/fonts
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/ben/main.js  --minify



