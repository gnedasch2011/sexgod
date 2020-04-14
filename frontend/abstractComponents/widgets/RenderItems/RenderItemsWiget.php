<?php

namespace frontend\abstractComponents\widgets\RenderItems;

use yii\base\Widget;

class RenderItemsWiget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $this->path = '/catalog/';

        return $this->render('view', [
            'childsCurrentCategory' => $this->childsCurrentCategory,
            'path' => $this->path,
        ]);
    }
}