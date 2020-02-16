<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\widgets\AdvantagesIcons;

class ModalWindowWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
      }

    public function run()
    {
        return $this->render('modal_window_widget');
    }
}