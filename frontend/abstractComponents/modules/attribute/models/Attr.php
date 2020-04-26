<?php

namespace frontend\abstractComponents\modules\attribute\models;

use Yii;

/**
 * This is the model class for table "attr".
 *
 * @property int $id
 * @property string $name
 * @property int $group_id
 * @property string $name_for_form
 * @property string $unit
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
            [['name_for_form', 'unit'], 'string', 'max' => 45],
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
            'name_for_form' => 'Name For Form',
            'unit' => 'Unit',
        ];
    }
}
