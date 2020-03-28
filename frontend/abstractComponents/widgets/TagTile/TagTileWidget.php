<?php

namespace frontend\abstractComponents\widgets\TagTile;

use yii\base\Widget;

class TagTileWidget extends Widget
{
    public $path;
    public $childsCurrentCategory;

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