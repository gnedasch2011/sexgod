<?php

namespace frontend\abstractComponents\widgets\RenderItems;

use yii\base\Widget;

class RenderItemsWiget extends Widget
{
    public $items;
    public $temlpate;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render($this->temlpate, [
            'items' => $this->items,

        ]);
    }
}