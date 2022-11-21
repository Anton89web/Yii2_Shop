<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '/assets/gory/assets/css/bootstrap.min.css',
        '/assets/gory/assets/css/animate.css',
        '/assets/gory/assets/css/bootstrap.min.css.map',
        '/assets/gory/assets/css/flaticon.css',
        '/assets/gory/assets/css/ignore_in_wp.css',
        '/assets/gory/assets/css/lightcase.css',
        '/assets/gory/assets/css/owl.carousel.min.css',
        '/assets/gory/assets/css/owl.theme.default.min.css',
        '/assets/gory/assets/css/pe-icon-7-stroke.css',
        '/assets/gory/assets/css/preset.css',
        '/assets/gory/assets/css/responsive.css',
        '/assets/gory/assets/css/settings.css',
        '/assets/gory/assets/css/theme.css',
        '/assets/gory/assets/css/themewar-icons.css',
    ];
    public $js = [
        '/assets/gory/assets/js/bootstrap.min.js',
        '/assets/gory/assets/js/bootstrap.min.js.map',
        '/assets/gory/assets/js/jquery-ui.js',
        '/assets/gory/assets/js/jquery.appear.js',
        '/assets/gory/assets/js/jquery.countdown.min.js',
        '/assets/gory/assets/js/jquery.countdown.min.map',
        '/assets/gory/assets/js/jquery.easing.1.3.js',
        '/assets/gory/assets/js/jquery.js',
        '/assets/gory/assets/js/jquery.plugin.min.js',
        '/assets/gory/assets/js/jquery.plugin.min.map',
        '/assets/gory/assets/js/jquery.shuffle.min.js',
        '/assets/gory/assets/js/jquery.themepunch.revolution.min.js',
        '/assets/gory/assets/js/jquery.themepunch.tools.min.js',
        '/assets/gory/assets/js/lightcase.js',
        '/assets/gory/assets/js/modernizr.custom.js',
        '/assets/gory/assets/js/owl.carousel.min.js',
        '/assets/gory/assets/js/shuffle.js.map',
        '/assets/gory/assets/js/theme.js',
        '/assets/gory/assets/js/tweenmax.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
