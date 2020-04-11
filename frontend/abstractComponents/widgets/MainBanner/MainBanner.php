<?php

namespace frontend\abstractComponents\widgets\MainBanner;

use yii\base\Widget;

class MainBanner extends Widget
{
    public $items;
    public $path;


    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('sexgod/mainBlock', [
            'items' => $this->items,
            'path' => $this->path,
        ]);
    }
}