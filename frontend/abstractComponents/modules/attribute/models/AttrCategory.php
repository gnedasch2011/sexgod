<?php

namespace frontend\abstractComponents\modules\attribute\models;

use Yii;

/**
 * This is the model class for table "attr_category".
 *
 * @property int $id
 * @property int $category_id
 * @property int $attr_id
 * @property int $positon
 * @property int $visible
 */
class AttrCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attr_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'attr_id', 'positon', 'visible'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'attr_id' => 'Attr ID',
            'positon' => 'Positon',
            'visible' => 'Visible',
        ];
    }
}
