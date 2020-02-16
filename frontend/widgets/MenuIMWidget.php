<?php


namespace app\widgets;

use frontend\abstractComponents\models\CategoryAbstract;
use yii\base\Widget;

class MenuIMWidget extends Widget
{
    public $categoryName;

    public function init()
    {
        parent::init();
        if ($this->categoryName === null) {
            $this->categoryName = 'videodomofony';
        }

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