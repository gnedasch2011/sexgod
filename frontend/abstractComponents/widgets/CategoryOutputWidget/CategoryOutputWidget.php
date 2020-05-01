<?php

namespace frontend\abstractComponents\widgets\CategoryOutputWidget;

use yii\base\Widget;

class CategoryOutputWidget extends Widget
{
    public $items;
    public $template;

    public function init()
    {
        parent::init();
    }

    public function run()
    {

        return $this->render($this->template, [
            'items' => $this->items,
        ]);
    }
}