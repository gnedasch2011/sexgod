<?php

namespace frontend\abstractComponents\modules\attribute\widgets\FilterWidget;

use yii\base\Widget;

class FilterWithAttrWidget extends Widget
{
    public $id;
    public $typeFilter;
    public $h2;
    public $template;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return true;
        $this->path = '/catalog/';

        return $this->render('view', [
            'childsCurrentCategory' => $this->childsCurrentCategory,
            'path' => $this->path,
        ]);
    }
}