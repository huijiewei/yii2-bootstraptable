<?php

namespace huijiewei\bootstraptable;

use yii\web\AssetBundle;

class BootstrapTableStickyHeaderAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap-table/dist/extensions/sticky-header';

    public $js = [
        'bootstrap-table-sticky-header.min.js',
    ];

    public $css = [
        'bootstrap-table-sticky-header.min.css',
    ];

    public $depends = [
        BootstrapTableAsset::class,
    ];
}
