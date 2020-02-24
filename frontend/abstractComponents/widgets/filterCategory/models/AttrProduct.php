<?php

namespace frontend\abstractComponents\widgets\filterCategory\models;

use Yii;

/**
 * This is the model class for table "attr_product".
 *
 * @property int $id
 * @property string $attr_id
 * @property int $product_id
 * @property int $value
 */
class AttrProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attr_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attr_id'], 'required'],
            [['product_id', 'value'], 'integer'],
            [['attr_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attr_id' => 'Attr ID',
            'product_id' => 'Product ID',
            'value' => 'Value',
        ];
    }
}
