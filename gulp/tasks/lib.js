import webpack from "webpack-stream";

export const lib = () => {
 return app.gulp.src(app.path.src.lib, { sourcemap: app.isDev })
.pipe(webpack({
    mode:app.isBuild ? "production" : "development",
    output: {
        filename: "lib.min.js",
    }
}))
    .pipe(app.gulp.dest(app.path.build.lib))
    .pipe(app.plugins.browsersync.stream());
}