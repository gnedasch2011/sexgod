<?php

namespace frontend\abstractComponents\modules\order\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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

    public static $payments = [
        1 => 'Наличными при получении',
        2 => 'Картой на сайте',
        3 => 'Картой при доставке',
    ];

    public function behaviors()
    {
        return [
            //Использование поведения TimestampBehavior ActiveRecord
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    \yii\db\BaseActiveRecord::EVENT_BEFORE_INSERT => ['dateCreate'],
                    \yii\db\BaseActiveRecord::EVENT_BEFORE_UPDATE => ['dateCreate'],

                ],
                //можно использовать 'value' => new \yii\db\Expression('NOW()'),
                'value' => function () {
                    return gmdate("Y-m-d H:i:s");
                },


            ],

        ];
    }

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
            [['payment_method', 'dateCreate', 'delivery', 'phone', 'address', 'arr_product', 'email', 'name'], 'string', 'max' => 255],
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
            'address' => 'address',
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
