<?php


namespace frontend\abstractComponents\models;


use yii\base\Model;

class Payments extends Model
{
    public function rules()
    {
        return [
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'required'],
            ['name', 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
        ];
    }
}