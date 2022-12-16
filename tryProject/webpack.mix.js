const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/js_del_usersetting.js', 'public/js')
    .js('resources/js/js_groupin_grouplist2.js', 'public/js')
    .js('resources/js/js_grouplist.js', 'public/js')
    .js('resources/js/js_grouplist2.js', 'public/js')
    .js('resources/js/js_newgroup_grouplist2.js', 'public/js')
    .js('resources/js/js_popup.js', 'public/js')
    .js('resources/js/php_groupsetting.js', 'public/js')
    .postCss('resources/css/css_del_usersetting.css', 'public/css')
    .postCss('resources/css/css_groupin_grouplist.css', 'public/css')
    .postCss('resources/css/css_grouplist.css', 'public/css')
    .postCss('resources/css/css_newgroup_grouplist.css', 'public/css')
    .postCss('resources/css/css_userlist.css', 'public/css')
    .postCss('resources/css/php_groupsetting.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
