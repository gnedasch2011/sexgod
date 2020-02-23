<?php
namespace app\models\videoshop\search;

use yii\base\Model;

class Search extends Model
{
    /**
     * {@inheritdoc}
     */

    public $search;

    public function rules()
    {
        return [
            ['search', 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

}
