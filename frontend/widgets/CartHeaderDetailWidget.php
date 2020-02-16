<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Cart;

class CartHeaderDetailWidget extends Widget
{
    public $cart;
    public $goods;
    public $fullPrice;

    public function init()
    {
        parent::init();

        $this->cart =new Cart();
        $this->goods = $this->cart->getProductForCart();
        $this->fullPrice = $this->cart->returnFormatFullPrice();

    }

    public function run()
    {
        return $this->render('cart/detail_cart_header', [
            'goods' => $this->goods,
            'fullPrice' => $this->fullPrice,
            'cart' => $this->cart,
        ]);
    }
}