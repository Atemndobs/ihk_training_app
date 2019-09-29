var Encore = require('@symfony/webpack-encore')
//const Encore = require('@symfony/webpack-encore');


Encore
    .setOutputPath('public/build')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableVueLoader()
;

module.exports = Encore.getWebpackConfig();
