<?php

namespace frontend\modules\cart\models\form_for_order;

use yii\base\Model;

class Checkout extends Model
{
    public $phone;
    public $payment_method;
    public $dateCreate;
    public $delivery;
    public $address;
    public $comment;
    public $arr_product;
    public $email;
    public $name;
    public $town;
    public $puboferta;

    public function rules()
    {
        return [
            ['phone', 'required'],
            [[
                'payment_method', 'dateCreate', 'delivery', 'phone', 'address', 'arr_product','email','name', 'puboferta'
            ], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
        ];
    }
}