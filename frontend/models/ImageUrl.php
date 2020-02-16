<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image_url".
 *
 * @property int $good_id
 * @property string $hash_path
 */
class ImageUrl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image_url';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['good_id','id'], 'integer'],
            [['hash_path'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'good_id' => 'Good ID',
            'hash_path' => 'Hash Path',
        ];
    }
}
