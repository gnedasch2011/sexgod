<?php


namespace frontend\abstractComponents\components;


use yii\base\Component;

class Cart extends Component
{
    public function checkGoodsInCart($idGood)
    {
        $cart = new \app\models\Cart();

        return $cart->checkGoodsInCart($idGood);
    }

}