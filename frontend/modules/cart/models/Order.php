<?php

namespace app\modules\cart\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $payment_method
 * @property string $dateCreate
 * @property string $delivery
 * @property string $phone
 * @property string $adress
 * @property string $arr_product
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['phone', 'required'],
            [['payment_method', 'dateCreate', 'delivery', 'phone', 'address', 'arr_product','email','name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment_method' => 'Payment Method',
            'dateCreate' => 'Date Create',
            'delivery' => 'Delivery',
            'phone' => 'Phone',
            'adress' => 'Adress',
            'arr_product' => 'Arr Product',
        ];
    }

    public function getPaymentMethod()
    {
        switch ($this->payment_method) {
            case '':
                return 0;
            case 'nul':
                return 'Наличными при получении';
            case 'beznal':
                return 'Безналичный по реквизитам';
            default:
                return 'Безналичный по реквизитам';

        }
    }
}
