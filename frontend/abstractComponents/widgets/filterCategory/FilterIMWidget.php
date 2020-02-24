<?php


namespace frontend\abstractComponents\widgets\filterCategory;


use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\widgets\filterCategory\models\AttributeMain;
use yii\base\Widget;

class FilterIMWidget extends Widget
{
    public $categoryName;
    public $AttributesForFilter;


    public function init()
    {
        parent::init();
        //собираем id аттрибутов и на основе их групп и позиции делаем диапазон или checkbox
        $catId = CategoryAbstract::getIdBySlug($this->categoryName);
        
        $this->AttributesForFilter = AttributeMain::getAttributesForFilter($catId);
        echo "<pre>"; print_r($this->AttributesForFilter);die();
        //наполняем модель аттрибутами и группой


    }

    public function run()
    {

        echo 'stet';
//        return $this->render($this->template, [
//            'model' => $this->model,
//        ]);
    }
}