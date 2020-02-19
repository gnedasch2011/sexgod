<?php

namespace app\models\videoshop;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $phone
 * @property string $adress
 * @property string $payment_method
 * @property string $installation
 * @property string $delivery
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

            [['payment_method','dateCreate', 'installation', 'delivery'], 'string', 'max' => 45],
            [['phone'], 'integer'],
            [['phone'], 'required'],
            [['adress', 'arr_product'], 'string', 'max' => 450],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'adress' => 'Adress',
            'payment_method' => 'Payment Method',
            'installation' => '',
            'delivery' => 'Delivery',
            'dateCreate' => 'dateCreate',
        ];
    }

    public function getInst()
    {
        if ($this->installation == 1) {
            return "Монтаж требуется";
        } else {
            return "Монтаж не требуется";
        }
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
