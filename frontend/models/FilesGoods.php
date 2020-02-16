<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "files_goods".
 *
 * @property int $id
 * @property string $good_id
 * @property string $file_path
 * @property string $name
 */
class FilesGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_path', 'name'], 'string'],
            [['good_id', 'id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'good_id' => 'Good ID',
            'file_path' => 'File Path',
            'name' => 'Name',
        ];
    }
}
