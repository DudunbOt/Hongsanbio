<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/site.css',

        // sb-admin
        'vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'css/sb-admin-2.min.css',

        // hongsanbio default
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/animate/animate.min.css',
        'lib/font-awesome/css/font-awesome.min.css',
        'lib/ionicons/css/ionicons.min.css',
        'lib/magnific-popup/magnific-popup.css',
        'css/style.css',
    ];
    public $js = [
      // sb-admin
      // 'vendor/jquery/jquery.min.js',
      'vendor/bootstrap/js/bootstrap.bundle.min.js',
      'vendor/jquery-easing/jquery.easing.min.js',
      'js/sb-admin-2.min.js',

      // hongsanbio default
      // 'lib/jquery/jquery.min.js',
      'lib/jquery/jquery-migrate.min.js',
      'lib/bootstrap/js/bootstrap.bundle.min.js',
      // 'lib/easing/easing.min.js',
      'lib/wow/wow.min.js',
      'lib/superfish/hoverIntent.js',
      'lib/superfish/superfish.min.js',
      'lib/magnific-popup/magnific-popup.min.js',
      'contactform/contactform.js',
      'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
