<?php

namespace frontend\abstractComponents\widgets\Icons;

use yii\base\Widget;

class Icons extends Widget
{
    public $items;
    public $path;


    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('sexgod/mainPage', [
            'items' => $this->items,
            'path' => $this->path,
        ]);
    }
}