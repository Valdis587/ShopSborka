import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());

const buldFolder = `./assets`;
const srcFolder = `./src`;

export const path = {
   build: {
      css: `${buldFolder}/css/`,
      js: `${buldFolder}/js/`,
      html: `${buldFolder}/`,
      files: `${buldFolder}/js/`,
      images: `${buldFolder}/images/`,
      fonts: `${buldFolder}/fonts/`,
      lib: `${buldFolder}/js/`,
      woo: `${buldFolder}/js/`,
      count: `${buldFolder}/js/`,
      quick: `${buldFolder}/js/`,
   },
   src: {
      scss: `${srcFolder}/scss/style.scss`,
      js: `${srcFolder}/js/scripts.js`,
      lib: `${srcFolder}/js/lib.js`,
      woo: `${srcFolder}/js/woo.js`,
      count: `${srcFolder}/js/count.js`,
      quick: `${srcFolder}/js/quick.js`,
      html: `${srcFolder}/*.html`,
      files: `${srcFolder}/files/**/*.*`,
      images: `${srcFolder}/images/**/*.*`,
      svg: `${srcFolder}/img/**/*.svg`,
      svgicons: `${srcFolder}/svgicons/*.svg`,
   },
   watch: {
      scss: `${srcFolder}/scss/**/*.scss`,
      js: `${srcFolder}/js/scripts.js`,
      count: `${srcFolder}/js/count.js`,
      quick: `${srcFolder}/js/quick.js`,
      html: `${srcFolder}/**/*.html`,
      files: `${srcFolder}/files/**/*.*`,
      images: `${srcFolder}/images/**/*.{jpg, jpeg, png, gif, webp, svg}`,
      lib: `${srcFolder}/js/lib.js`,
      woo: `${srcFolder}/js/woo.js`,
   },
   clean: buldFolder,
   buldFolder: buldFolder,
   srcFolder: srcFolder,
   rootFolder: rootFolder
}
