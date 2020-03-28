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


    public function getMaskForTitle()
    {
        $res = str_replace('#MIN_PRICE#', $this->minPrice . ' руб.', $this->title);

        return $res;
    }


    public function getMinPrice()
    {
        $title = $this->title;

        $minPrice = Goods::find()
            ->leftJoin('goods_category gc', 'gc.aID = goods.id')
            ->leftJoin('category c', 'c.id = gc.category_id')
            ->where(['c.slug' => $this->slug])
            ->min('BaseRetailPrice');

        return $minPrice ?? '';
    }


    public function getDescriptionMeta()
    {
        $minPrice = $this->minPrice;
        $phone = \Yii::$app->params['phone'];

        $search = ["#MIN_PRICE #", "#PHONE#"];
        $replace = [$minPrice, $phone];

        $res = str_replace($search, $replace, $this->description);

        return $res;

    }


}

