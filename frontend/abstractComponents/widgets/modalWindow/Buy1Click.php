<?php


namespace frontend\abstractComponents\widgets\modalWindow;


use yii\base\Model;

class Buy1Click extends Model
{
    public $phone;
    public $email;
    public $text_from_client;
    public $idItem;

    public function rules()
    {
        return [
            ['email', 'email'],
            ['idItem', 'integer'],
            [['email','phone', 'text_from_client'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
        ];
    }
}
