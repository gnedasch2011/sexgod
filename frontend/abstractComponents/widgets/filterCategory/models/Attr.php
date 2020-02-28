<?php

namespace frontend\abstractComponents\widgets\filterCategory\models;

use Yii;

/**
 * This is the model class for table "attr".
 *
 * @property int $id
 * @property string $name
 * @property int $group_id
 */
class Attr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['group_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'group_id' => 'Group ID',
        ];
    }

    public function getGroup()
    {
        return $this->hasOne(AttrGroup::className(), ['id' => 'group_id']);
    }


}
