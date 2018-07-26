<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 26.07.2018
 * Time: 14:24
 */

namespace delgus\knedlik;


use yii\base\Behavior;
use yii\web\Controller;

class DisableCsrfBehavior extends Behavior
{
    public $actions;

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'disableCsrf',
        ];
    }

    public function disableCsrf($event)
    {

        if (array_search($event->action->id,$this->actions) !== false) {
            $this->owner->enableCsrfValidation = false;
        }
    }

}