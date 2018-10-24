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
        'mkit/css/material-kit.css?v=2.0.4',
        'mkit/css/material-kit.css.map',
        'mkit/css/material-kit.min.css',
        'mkit/demo/demo.css',
        'css/site.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons'
    ];
    public $js = [
        'mkit/js/material-kit.js',
        // 'mkit/js/material-kit.js.map',
        // 'mkit/js/material-kit.min.js',
        // 'mkit/js/core/bootstrap-material-design.min.js',
        // 'mkit/js/core/jquery.min.js',
        // 'mkit/js/core/popper.min.js',
        // 'mkit/js/plugins/bootstrap-datetimepicker.js',
        // 'mkit/js/plugins/jquery.sharrre.js',
        // 'mkit/js/plugins/moment.min.js',
        // 'mkit/js/plugins/nouislider.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
