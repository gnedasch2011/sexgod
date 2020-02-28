<?php


namespace frontend\abstractComponents\widgets\filterCategory;


use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\widgets\filterCategory\models\AttributeMain;
use yii\base\Widget;

class FilterIMWidget extends Widget
{
    public $categoryName;
    public $model;
    public $attributesForFilter;
    public $AttributesModels;


    public function init()
    {
        parent::init();
        //собираем id аттрибутов и на основе их групп и позиции делаем диапазон или checkbox
        $catId = CategoryAbstract::getIdBySlug($this->categoryName);

        $this->attributesForFilter = AttributeMain::getAttributesForFilter($catId);
        $this->AttributesModels = AttributeMain::getAttributesModel($this->attributesForFilter);

    }

    public function run()
    {
        return $this->render('main', [
            'model' => $this->model,
            'AttributesModels' => $this->AttributesModels,
        ]);
    }
}