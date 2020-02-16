<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "attributies_type".
 *
 * @property int $id
 * @property string $type
 *
 * @property Attributies[] $attributies
 */
class AttributiesType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attributies_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['type'], 'string'],
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
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributies()
    {
        return $this->hasMany(Attributies::className(), ['attributies_type_id' => 'id']);
    }
}
