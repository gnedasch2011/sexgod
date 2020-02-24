<?php

namespace frontend\abstractComponents\widgets\modalWindow;

use yii\base\Widget;
use frontend\models\widgets\AdvantagesIcons;

class ModalWindowWidget extends Widget
{
    public $message;
    public $model;
    public $template;

    public function init()
    {
        parent::init();

    }

    public function run()
    {

        return $this->render($this->template, [
            'model' => $this->model,
        ]);
    }
}