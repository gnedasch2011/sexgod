<?php


namespace frontend\abstractComponents\widgets\filterCategory;


use frontend\abstractComponents\widgets\filterCategory\models\AttributeMain;
use yii\base\Widget;

class FabricFilterWiget extends Widget
{
    public $attrModel;

    public $typeFilter = [
        '1' => 'range.php',
        '2' => 'multiple_choice.php',
        '3' => 'pick_one.php',
    ];

    public function init()
    {
        parent::init();
//        echo "<pre>"; print_r($this->attrModel);die();
    }

    public function run()
    {
        return $this->render($this->typeFilter[$this->attrModel->group->id], [
//            'model' => $this->model,
//            'AttributesModels' => $this->AttributesModels,
        ]);
    }

}