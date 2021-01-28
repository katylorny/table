<?php

namespace app\assets;

use yii\web\AssetBundle;

class CountryAsset extends AssetBundle
{
    public $sourcePath = '@app/assets';

    public $css = [
        'css/country.css',
    ];
    public $js = [
        'js/jquery.slimscroll.min.js',
        'js/main.js',
    ];

    public $depends = [];
}