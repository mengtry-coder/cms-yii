<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'assets/plugins/jqvmap/jqvmap.min.css',
        'assets/dist/css/adminlte.min.css',
        'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'assets/plugins/daterangepicker/daterangepicker.css',
        'assets/plugins/summernote/summernote-bs4.css',

    ];
    public $js = [
        'assets/plugins/jquery/jquery.min.js',
        'assets/plugins/jquery-ui/jquery-ui.min.js',
        'assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'assets/plugins/chart.js/Chart.min.js',
        'assets/plugins/sparklines/sparkline.js',
        'assets/plugins/jqvmap/jquery.vmap.min.js',
        'assets/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'assets/plugins/jquery-knob/jquery.knob.min.js',
        'assets/plugins/moment/moment.min.js',
        'assets/plugins/daterangepicker/daterangepicker.js',
        'assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'assets/plugins/summernote/summernote-bs4.min.js',
        'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'assets/dist/js/adminlte.js',
        'assets/dist/js/pages/dashboard.js',
        'assets/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
