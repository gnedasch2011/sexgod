<?php


namespace app\abstractComponents\widgets\MenuIMWidget;

use frontend\abstractComponents\models\CategoryAbstract;
use yii\base\Widget;

class MenuIMWidget extends Widget
{
    public $categoryName;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        $menuItem = CategoryAbstract::getActiveMenuItems($this->categoryName);

        return $this->render('leftMenu', [
            'categoryName' => $this->categoryName,
            'menuItem' => $menuItem
        ]);
    }
}