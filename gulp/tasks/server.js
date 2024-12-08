export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://shopse',
      host: 'shopse',
      open: 'external'
   });
}