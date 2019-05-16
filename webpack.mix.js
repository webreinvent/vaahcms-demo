const mix = require('laravel-mix');
var fs = require('fs');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

var admin_assets_json = JSON.parse(fs.readFileSync('resources/assets/vendor/vaahcms/admin/default/assets.json'));

console.log(admin_assets_json);

mix.combine(admin_assets_json['css'], 'public/css/vaahcms-admin.css')
    .combine(admin_assets_json['js'], 'public/js/vaahcms-admin.js')
    .version();