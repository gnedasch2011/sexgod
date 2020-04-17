<?php

namespace frontend\abstractComponents\modules\brand\models;

use app\models\sexgod\good\Goods;
use frontend\abstractComponents\helpers\CommonHelper;
use frontend\abstractComponents\models\CategoryAbstract;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "brands".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'path_img', 'url'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
        ];
    }

    public function getGoods()
    {
        $goods = Goods::find()
            ->leftJoin('brands b', 'b.name=goods.Vendor')
            ->where(['b.name' => $this->name]);

        return $goods;
    }


    public function getCountItems()
    {
        return 0;
    }

    public function getDesc()
    {
        return '';
    }

    public function getRelatedCategory()
    {

        //вытягиваем категории которые пересекаются с брендом
        /*
         SELECT c.slug FROM sexgod.category c
        left join sexgod.goods_category gc on
        left join sexgod.goods g on g.aID  = gc.aid
        where g.Vendor = "4sexdreaM";
         */

        $listCateg = CategoryAbstract::find()
            ->from('category c')
            ->leftJoin('sexgod.goods_category gc', 'gc.category_id = c.id')
            ->leftJoin('sexgod.goods g', 'g.aID  = gc.aid')
            ->where(['g.Vendor' => $this->name])
            ->all();

        $arr = ArrayHelper::map($listCateg, 'slug', 'name');

        return $arr;

    }

    public function getMinPrice()
    {

        $query = Goods::getQuery();
        $query->select('min(goods.BaseRetailPrice) as minPrice');
        $query->andWhere(['goods.Vendor' => $this->name]);

        if ($query->one()) {
            $minPrice = $query->one();
            return $minPrice['minPrice'];
        }

        return 0;
    }

    public function getFormatMinPrice()
    {
        $minPrice = $this->getMinPrice();
        return CommonHelper::formatPrice($minPrice);
    }

}
