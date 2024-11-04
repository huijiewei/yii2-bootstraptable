<?php

namespace huijiewei\bootstraptable;

use yii\web\AssetBundle;

class BootstrapTableAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap-table/dist';

    public $js = [
        'bootstrap-table.min.js',
    ];

    public $css = [
        'bootstrap-table.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
