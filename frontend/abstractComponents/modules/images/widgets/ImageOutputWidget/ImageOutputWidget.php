<?php

namespace frontend\abstractComponents\modules\images\widgets\ImageOutputWidget;

use yii\base\Widget;

class ImageOutputWidget extends Widget
{
    public $item;
    public $template;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if (isset($this->item)) {
            $path = $this->item->path . $this->item->name;

            return $this->render($this->template, [
                'item' => $this->item,
                'path' => $path,
            ]);
        }

        return false;
    }
}