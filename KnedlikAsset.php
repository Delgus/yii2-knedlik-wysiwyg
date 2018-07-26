<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 26.07.2018
 * Time: 9:55
 */

namespace delgus\knedlik;

use yii\web\AssetBundle;

class KnedlikAsset extends AssetBundle
{
    public $sourcePath = '@runtime/tmp-extensions/yii2-knedlik-wysiwyg/assets/';
    public $js = [
        'knedlik.js'
    ];
}