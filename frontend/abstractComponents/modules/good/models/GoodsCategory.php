<?php

namespace frontend\abstractComponents\modules\good\models;

use frontend\abstractComponents\models\CategoryAbstract;
use Yii;

/**
 * This is the model class for table "goods_category".
 *
 * @property int $id
 * @property int $goods_id
 * @property int $category_id
 * @property int $position
 */
class GoodsCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goods_id', 'category_id'], 'required'],
            [['goods_id', 'category_id', 'position'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'goods_id' => 'Goods ID',
            'category_id' => 'Category ID',
            'position' => 'Position',
        ];
    }

     public function getCategory()
         {
             return $this->hasOne(CategoryAbstract::className(), ['id' => 'category_id']);
         }

}
