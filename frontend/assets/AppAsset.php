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
        'assets/framework/vendor/bootstrap/css/bootstrap.min.css',
        'assets/framework/vendor/icofont/icofont.min.css',
        'assets/framework/vendor/owl.carousel/assets/owl.carousel.min.css',
        'assets/framework/vendor/boxicons/css/boxicons.min.css',
        'assets/framework/vendor/venobox/venobox.css',
        'assets/framework/vendor/aos/aos.css',
        'assets/framework/css/style.css',
    ];
    public $js = [
        'assets/framework/vendor/jquery/jquery.min.js',
        'assets/framework/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'assets/framework/vendor/jquery.easing/jquery.easing.min.js',
        'assets/framework/vendor/php-email-form/validate.js',
        'assets/framework/vendor/waypoints/jquery.waypoints.min.js',
        'assets/framework/vendor/counterup/counterup.min.js',
        'assets/framework/vendor/owl.carousel/owl.carousel.min.js',
        'assets/framework/vendor/isotope-layout/isotope.pkgd.min.js',
        'assets/framework/vendor/venobox/venobox.min.js',
        'assets/framework/vendor/aos/aos.js',
        'assets/framework/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
