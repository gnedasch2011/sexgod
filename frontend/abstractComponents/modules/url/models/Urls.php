<?php

namespace frontend\abstractComponents\modules\url\models;

use Yii;

/**
 * This is the model class for table "urls".
 *
 * @property int $id
 * @property string $alias
 * @property string $route
 * @property int $param
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property int $isAdaptive
 * @property int $status
 * @property string $params_for_filter
 */
class Urls extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias', 'route'], 'required'],
            [['param', 'isAdaptive', 'status'], 'integer'],
            [['alias', 'route', 'title', 'keywords', 'description', 'h1'], 'string', 'max' => 255],
            [['params_for_filter'], 'string', 'max' => 450],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'route' => 'Route',
            'param' => 'Param',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'isAdaptive' => 'Is Adaptive',
            'status' => 'Status',
            'params_for_filter' => 'Params For Filter',
        ];
    }
}
