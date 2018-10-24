<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'mdb/css/bootstrap.min.css',
        'mdb/css/material-dashboard.css',
        'mdb/css/demo.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'
    ];
    public $js = [
        'mdb/js/bootstrap.min.js',
        'mdb/js/material.min.js',
        'mdb/js/chartist.min.js',
        'mdb/js/arrive.min.js',
        'mdb/js/perfect-scrollbar.jquery.min.js',
        'mdb/js/bootstrap-notify.js',
        'mdb/js/material-dashboard.js',
        'mdb/js/demo.js',
        'mdb/js/jquery.countdown.js',
        'mdb/js/jquery.countdown.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
