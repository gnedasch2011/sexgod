<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 25.11.2019
 * Time: 8:43
 */

namespace frontend\abstractComponents\widgets\paymentBlock;


class PaymentBlockWidget extends \yii\base\Widget
{
    public function init()
    {

        parent::init();
    }

    public function run()
    {
       return $this->render();
    }
}