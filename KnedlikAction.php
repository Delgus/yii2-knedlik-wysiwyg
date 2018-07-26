<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 26.07.2018
 * Time: 12:35
 */

namespace delgus\knedlik;


use yii\base\Action;

class KnedlikAction extends Action
{
    public $uploadDir;

    public function run()
    {
        if (isset($_FILES['file']['tmp_name'])) {
            $tmp_name = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            move_uploaded_file($tmp_name, \Yii::getAlias('@webroot') . $this->uploadDir . '/' . $name);
            return $this->uploadDir . '/' . $name;
        }
    }
}