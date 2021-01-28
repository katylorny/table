<?php

namespace app\assets;

use yii\web\AssetBundle;

class CountryAsset extends AssetBundle
{
    public $sourcePath = '@app/assets';

    public $css = [
        'css/simplebar.css',
        'css/country.css',
    ];
    public $js = [
        'js/main.js',
        'js/simplebar.js',
    ];

    public $depends = [];
}