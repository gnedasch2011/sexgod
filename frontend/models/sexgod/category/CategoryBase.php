<?php

namespace app\models\sexgod\category;

use app\models\sexgod\category\CategoryAdvantages;
use app\models\sexgod\good\Goods;
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

    public function getTitleMinPrice()
    {
        $title = $this->title;

        $minPrice = Goods::find()
            ->leftJoin('goods_category gc', 'gc.aID = goods.id')
            ->leftJoin('category c', 'c.id = gc.category_id')
            ->where(['c.slug' => $this->slug])
            ->min('BaseRetailPrice');

        $res = str_replace('#MIN_PRICE#', $minPrice . ' руб.', $title);

        $resTitle = $res . ' руб.';

        return $resTitle;

    }


}
