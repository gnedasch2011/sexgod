<?php

namespace frontend\controllers;


use frontend\abstractComponents\helpers\CommonHelper;
use Yii;
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
        $this->layout = 'red_stroyka/main';

        $cart = \Yii::$app->cart;

        $goodsInCart = $cart->getProductForCart();
        $order = new \frontend\abstractComponents\modules\order\models\Order();

        $this->view->params['h1'] = 'Корзина';

        if ($order->load(\Yii::$app->request->post())) {
            $order->arr_product = serialize($goodsInCart->cart);

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
        $dataForCart = \Yii::$app->cart->addInSessionCart();

        return \Yii::$app->cart->addInSessionCart();
    }


    public function actionAjaxClear()
    {
        $session = \Yii::$app->cart->sessionInit();
        $session->destroy();

        return true;
    }

    public function actionGetTotalPriceOneGood()
    {
        $idGood = \Yii::$app->request->post('idGood');
        $totalPriceOneGood = \Yii::$app->cart->getFullPriceOneGood($idGood);

        return CommonHelper::formatPrice($totalPriceOneGood) . ' руб.';
    }

    public function actionAjaxUpdateCart()
    {
        $this->enableCsrfValidation = false;

        return $this->renderPartial('/cart/headerCartWidget');
    }

    public function actionGetCartInfo()
    {
        echo "<pre>";
        print_r(\Yii::$app->cart);
        die();
        return 'test';
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

    public function actionGetCountItems()
    {
        $cart = new Cart();

        if (isset($cart['cart'])) {
            return array_sum($cart['cart']);
        }

        return 0;
    }

    public function actionClear()
    {
        $cart = new Cart();
        $cart->clear();

        $cart->cart = false;
    }

    public function actionTest()
    {
        $cart = new Cart();
        echo "<pre>";
        print_r($cart);
        die();
        echo "<pre>";
        print_r($cart->checkGoodsInCart(383802));
        die();
    }

}