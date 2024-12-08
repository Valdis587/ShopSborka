import webpack from "webpack-stream";

export const woo = () => {
 return app.gulp.src(app.path.src.woo, { sourcemap: app.isDev })
.pipe(webpack({
    mode:app.isBuild ? "production" : "development",
    output: {
        filename: "woo.min.js",
    }
}))
    .pipe(app.gulp.dest(app.path.build.woo))
    .pipe(app.plugins.browsersync.stream());
}