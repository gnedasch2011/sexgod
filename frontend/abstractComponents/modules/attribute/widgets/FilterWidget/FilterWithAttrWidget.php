<?php

namespace frontend\abstractComponents\modules\attribute\widgets\FilterWidget;

use frontend\abstractComponents\modules\attribute\models\Attr;
use yii\base\Widget;

class FilterWithAttrWidget extends Widget
{
    public $id;
    public $h2;
    public $template;
    public $category;

    public function init()
    {

        if (!isset($this->template)) {
            $this->template = "filter/sexgod/_block/";
        }
        parent::init();
    }

    public function run()
    {

        $attr = Attr::findOne(['id' => $this->id]);

        return $this->render($this->template . $attr->group->type, [
            'attr' => $attr,
            'category' => $this->category,
        ]);
    }
}