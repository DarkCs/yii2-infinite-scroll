<?php
namespace darkcs\infinitescroll;

use yii\web\AssetBundle;

class InfiniteScrollAsset extends AssetBundle
{
    public $sourcePath = '@vendor/darkcs/yii2-infinite-scroll/assets';
    public $js = [
        'jquery.infinitescroll.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
