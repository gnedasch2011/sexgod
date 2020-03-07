<?php

namespace app\models\sexgod\category;

use app\models\sexgod\category\CategoryAdvantages;
use frontend\abstractComponents\models\CategoryAbstract;
use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 */
class CategoryBase extends CategoryAbstract
{
    public function getAdvantages()
    {
        return $this->hasOne(CategoryAdvantages::className(), ['category_id' => 'id']);
    }


    public function getDesc()
    {
        return $this->hasOne(CategoryAdvantages::className(), ['description' => 'id']);
    }


}
