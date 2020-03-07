<?php

namespace frontend\controllers;


use yii\web\Controller;
use app\models\Cart;
use app\models\sexgod\good\Goods;
use app\modules\cart\models\Order;

class CartController extends Controller
{
    public $layout = 'main';
    public $title;

    public function actionIndex()
    {
        $cart = new Cart();
        $goodsInCart = $cart->getProductForCart();
      
        $order = new \app\modules\cart\models\Order();

        if ($order->load(\Yii::$app->request->post())) {

            $order->arr_product = serialize($cart->cart);

            if ($order->save()) {

                $order = Order::findOne($order->id);
                $order->dateCreate = date('d.m.Y H:m');
                $products = Goods::getProductArrProduct(unserialize(($order->arr_product)));

                $idCountPrices = unserialize(($order->arr_product));
                $cart = new Cart();

                return $this->render('addOrder', [
                    'order' => $order,
                    'products' => $products,
                    'idCountPrices' => $idCountPrices,
                    'cart' => $cart,
                ]);
            };
        }

        return $this->render('cart', [
            'goodsInCart' => $goodsInCart,
            'cart' => $cart,
            'order' => $order,
        ]);
    }


    public function actionAddInSessionCart()
    {
        $dataForCart = Cart::geInitAjaxData();
        $session = Cart::sessionInit();

        $cart = new Cart();
        $cart = $cart->cart;

        if (empty($cart)) {
            $session['cart'] = [
                $dataForCart['id'] => $dataForCart['count']
            ];
        }

        if (!empty($cart)) {

            if (isset($cart[$dataForCart['id']])) {
                $cart[$dataForCart['id']] = $dataForCart['count'];
                $session->set('cart', $cart);
            } else {
                $cart[$dataForCart['id']] = $dataForCart['count'];
                $session->set('cart', $cart);
            }

        }
        return true;
    }

    public function actionAjaxClear()
    {
        $session = Cart::sessionInit();
        $session->destroy();

        return true;
    }

    public function actionAjaxUpdateCart()
    {
        $this->enableCsrfValidation = false;
        return $this->renderPartial('/cart/headerCartWidget');
    }

    public function actionCartDeleteItem()
    {
        $deleteItemId = Cart::geInitAjaxData();
        $session = Cart::sessionInit();

        $cart = new Cart();
        $cart = $cart->cart;
        unset($cart[$deleteItemId['id']]);
        $session->set('cart', $cart);
        return true;
    }

    public function actionGetFullPrice()
    {
        $cart = new Cart();
        return $cart->returnFormatFullPrice();
    }

    public function actionTest()
    {
        $cart = new Cart();
        echo "<pre>"; print_r($cart->checkGoodsInCart(383802));die();
    }

}