<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "goods_has_category".
 *
 * @property int $goods_id
 * @property int $category_id
 */
class GoodsHasCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods_has_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goods_id', 'category_id'], 'required'],
            [['goods_id', 'category_id'], 'integer'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'category_id' => 'Category ID',
        ];
    }
}
