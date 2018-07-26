<?php

namespace delgus\knedlik;

use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 */
class Knedlik extends InputWidget
{
    /** @link http://knedlik.kirillpanfilov.com */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $this->registerPlugin();
    }

    protected function registerPlugin()
    {
        $view = $this->getView();
        KnedlikAsset::register($view);
        $id = $this->options['id'];
        $jsonOptions = json_encode($this->clientOptions);
        $view->registerJs("knedlik('$id',$jsonOptions)");
    }
}
