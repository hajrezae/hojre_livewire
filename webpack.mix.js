const mix = require('laravel-mix');
const glob = require('glob');
const path = require('path');
const ReplaceInFileWebpackPlugin = require('replace-in-file-webpack-plugin');
const rimraf = require('rimraf');
//
// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */
//
// // Default
// mix.js('resources/admin/js/app.js', 'public/js');
//

//
// // Global jquery
// mix.autoload({
//     'jquery': ['$', 'jQuery'],
//     Popper: ['popper.js', 'default'],
// });
//
// // 3rd party plugins css/js
// mix.sass('resources/admin/plugins/plugins.scss', 'public/admin/plugins/global/plugins.bundle.css').then(() => {
//     // remove unused preprocessed fonts folder
//     // rimraf(path.resolve('public/admin/fonts'), () => {});
//     rimraf(path.resolve('public/admin/images'), () => {
//     });
// }).sourceMaps(!mix.inProduction())
//     // .setResourceRoot('./')
//     .options({processCssUrls: false}).js(['resources/admin/plugins/plugins.js'], 'public/admin/plugins/global/plugins.bundle.js');

// // Metronic css/js
// mix.sass('resources/admin/metronic/sass/style.scss', 'public/admin/css/style.bundle.css', {
//     sassOptions: {includePaths: ['node_modules']},
// })
//     .options({processCssUrls: false})
//     .js('resources/admin/js/scripts.js', 'public/admin/js/scripts.bundle.js');

// // Custom 3rd party plugins
// (glob.sync('resources/admin/plugins/custom/**/*.js') || []).forEach(file => {
//     mix.js(file, `public/${file.replace('resources/', '').replace('.js', '.bundle.js')}`);
// });
// (glob.sync('resources/admin/plugins/custom/**/*.scss') || []).forEach(file => {
//     mix.sass(file, `public/${file.replace('resources/', '').replace('.scss', '.bundle.css')}`);
// });
//
// // Metronic css pages (single page use)
// (glob.sync('resources/admin/metronic/sass/pages/**/!(_)*.scss') || []).forEach(file => {
//     file = file.replace(/[\\\/]+/g, '/');
//     mix.sass(file, file.replace('resources/admin/metronic/sass', 'public/admin/css').replace(/\.scss$/, '.css'));
// });
//
// // Metronic js pages (single page use)
// (glob.sync('resources/admin/metronic/js/pages/**/*.js') || []).forEach(file => {
//     mix.js(file, `public/admin/${file.replace('resources/admin/metronic/', '')}`);
// });
//
// // pages custom js
// (glob.sync('resources/admin/js/pages/**/*.js') || []).forEach(file => {
//     mix.js(file, `public/${file.replace('resources/', '')}`);
// });
//
// // Metronic media
// mix.copyDirectory('resources/admin/metronic/media', 'public/admin/media');
//
// // Metronic theme
// (glob.sync('resources/admin/metronic/sass/themes/**/!(_)*.scss') || []).forEach(file => {
//     file = file.replace(/[\\\/]+/g, '/');
//     mix.sass(file, file.replace('resources/admin/metronic/sass', 'public/admin/css').replace(/\.scss$/, '.css'));
// });
//
// mix.webpackConfig({
//     plugins: [
//         new ReplaceInFileWebpackPlugin([
//             {
//                 // rewrite font paths
//                 dir: path.resolve('public/admin/plugins/global'),
//                 test: /\.css$/,
//                 rules: [
//                     {
//                         // fontawesome
//                         search: /url\((\.\.\/)?webfonts\/(fa-.*?)"?\)/g,
//                         replace: 'url(./fonts/@fortawesome/$2)',
//                     },
//                     {
//                         // flaticon
//                         search: /url\(("?\.\/)?font\/(Flaticon\..*?)"?\)/g,
//                         replace: 'url(./fonts/flaticon/$2)',
//                     },
//                     {
//                         // flaticon2
//                         search: /url\(("?\.\/)?font\/(Flaticon2\..*?)"?\)/g,
//                         replace: 'url(./fonts/flaticon2/$2)',
//                     },
//                     {
//                         // keenthemes fonts
//                         search: /url\(("?\.\/)?(Ki\..*?)"?\)/g,
//                         replace: 'url(./fonts/keenthemes-icons/$2)',
//                     },
//                     {
//                         // lineawesome fonts
//                         search: /url\(("?\.\.\/)?fonts\/(la-.*?)"?\)/g,
//                         replace: 'url(./fonts/line-awesome/$2)',
//                     },
//                     {
//                         // socicons
//                         search: /url\(("?\.\.\/)?font\/(socicon\..*?)"?\)/g,
//                         replace: 'url(./fonts/socicon/$2)',
//                     },
//                 ],
//             },
//         ]),
//     ],
// });
//
// // Webpack.mix does not copy fonts, manually copy
// (glob.sync('resources/admin/metronic/plugins/**/*.+(woff|woff2|eot|ttf)') || []).forEach(file => {
//     var folder = file.match(/resources\/admin\/metronic\/plugins\/(.*?)\//)[1];
//     mix.copy(file, `public/admin/plugins/global/fonts/${folder}/${path.basename(file)}`);
// });
// (glob.sync('node_modules/+(@fortawesome|socicon|line-awesome)/**/*.+(woff|woff2|eot|ttf)') || []).forEach(file => {
//     var folder = file.match(/node_modules\/(.*?)\//)[1];
//     mix.copy(file, `public/admin/plugins/global/fonts/${folder}/${path.basename(file)}`);
// });
//
//
