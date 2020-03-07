<?php

namespace app\models\sexgod\category;

use Yii;

/**
 * This is the model class for table "category_advantages".
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 */
class CategoryAdvantages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_advantages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id'], 'required'],
            [['id', 'category_id'], 'integer'],
            [['name'], 'string'],
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
            'category_id' => 'Category ID',
        ];
    }
}
