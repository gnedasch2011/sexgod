<?php

namespace frontend\abstractComponents\widgets\GenerateBlockGood;

use yii\base\Widget;

class GenerateBlockGood extends Widget
{
    public $items;


    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('@frontend/abstractComponents/modules/good/views/ajax/_mainPageFeatures.php', [
            'items' => $this->items,
        ]);
    }
}