<?php

namespace common\components\src\sachcomp;
use yii\web\AssetBundle;

class NomusAsset extends AssetBundle {

    public $sourcePath = 'assets/';

    public $css = ['assets/feedback.min.css'];
    public $js = ['assets/feedback.min.js'];

    public $depends = ['yii\web\JqueryAsset'];
}