import webpack from "webpack-stream";

export const quick = () => {
 return app.gulp.src(app.path.src.quick, { sourcemap: app.isDev })
.pipe(webpack({
    mode:app.isBuild ? "production" : "development",
    output: {
        filename: "quick.min.js",
    }
}))
    .pipe(app.gulp.dest(app.path.build.quick))
    .pipe(app.plugins.browsersync.stream());
}