import webpack from "webpack-stream";

export const count = () => {
 return app.gulp.src(app.path.src.count, { sourcemap: app.isDev })
.pipe(webpack({
    mode:app.isBuild ? "production" : "development",
    output: {
        filename: "count.min.js",
    }
}))
    .pipe(app.gulp.dest(app.path.build.count))
    .pipe(app.plugins.browsersync.stream());
}