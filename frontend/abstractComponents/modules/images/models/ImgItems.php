<?php

namespace frontend\abstractComponents\modules\images\models;

use Yii;

/**
 * This is the model class for table "img_items".
 *
 * @property int $id
 * @property string $items_type
 * @property string $name
 * @property string $alt
 * @property string $path
 */
class ImgItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'img_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['items_type', 'name', 'alt', 'path','items_id'], 'string', 'max' => 45],
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
            'items_type' => 'Items Type',
            'name' => 'Name',
            'alt' => 'Alt',
            'path' => 'Path',
        ];
    }
}
