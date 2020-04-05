<?php

namespace frontend\controllers;


use frontend\abstractComponents\helpers\CommonHelper;
use frontend\modules\cart\models\form_for_order\Checkout;
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

        $checkout = new Checkout();
     
        return $this->render('cart', [
            'goodsInCart' => $goodsInCart,
            'cart' => $cart,
            'order' => $order,
            'checkout' => $checkout,
        ]);
    }

    public function actionGenerateOrderSuccess()
    {
        $this->layout = 'red_stroyka/main';
//        $idOrder = \Yii::$app->request->post('idOrder');
        $idOrder = 37;
        $order = \frontend\abstractComponents\modules\order\models\Order::findOne(['id' => $idOrder]);
        $goodsInCart = Yii::$app->cart->getProductForCart();;
        $totalPrice = Yii::$app->cart->returnCartFullPrice();;


        //почистить сессию
        return $this->render('successOrder', [
            'order' => $order,
            'goodsInCart' => $goodsInCart,
            'totalPrice' => $totalPrice,
        ]);
    }


    public function actionGetHtmlItemForDrop()
    {
        return $this->renderAjax('@frontend/views/site/sexgod/good/_item_in_drop_cart', [
            'products' => \Yii::$app->cart->returnProductModelsInCart()
        ]);
    }

    public function actionTestCart()
    {
        return json_encode($_SESSION);
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
//        echo "<pre>";
//        print_r(\Yii::$app->cart);
//        die();
        return 'test';
    }

    /**
     * Удалить товар из корзины
     * @return bool
     */
    public function actionCartDeleteItem()
    {
        $deleteItemId = Yii::$app->cart->geInitAjaxData();
        $session = Yii::$app->cart->sessionInit();
        unset(\Yii::$app->cart->cart[$deleteItemId['id']]);
        $session->set('cart', \Yii::$app->cart->cart);

        return true;
    }

    public function actionGetFullPrice()
    {
        return \Yii::$app->cart->returnFormatFullPrice();
    }

    public function actionGetCountItems()
    {
        if (isset(\Yii::$app->cart->cart)) {
            return array_sum(\Yii::$app->cart->cart);
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



//    public function actionCheckout()
//    {
//        $checkout = new Checkout();
//
//        if($checkout->load(\Yii::$app->request->post())){
//
//        }
//
//    }

}