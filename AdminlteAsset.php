<?php

namespace ubslum\mytheme;

use Exception;
use Yii;
use yii\web\AssetBundle;

/**
 * Class AdminlteAsset
 * @package modernkernel\themeadminlte
 */
class AdminlteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ubslum/yii2-mytheme/app';
    public $css = [
        'css/dotplant.css',
        'css/style.css',
        'css/style-responsive.css',
        'css/animate.min.css',
        'css/vertical-rhythm.min.css',
        'css/owl.carousel.css',
        'css/magnific-popup.css'
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\JqueryAsset',
        'yii\validators\ValidationAsset',
        'yii\widgets\ActiveFormAsset',
        '\kartik\icons\FontAwesomeAsset',
    ];
}
