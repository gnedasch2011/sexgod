<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "goods_has_attributies".
 *
 * @property int $id
 * @property int $attributies_id
 * @property int $goods_id
 * @property string $value
 */
class GoodsHasAttributies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods_has_attributies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attributies_id', 'goods_id'], 'required'],
            [['attributies_id', 'goods_id'], 'integer'],
            [['value'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attributies_id' => 'Attributies ID',
            'goods_id' => 'Goods ID',
            'value' => 'Value',
        ];
    }
}
