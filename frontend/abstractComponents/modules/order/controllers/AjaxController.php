<?php

namespace frontend\abstractComponents\modules\order\controllers;

use app\modules\cart\models\Order;
use frontend\abstractComponents\widgets\modalWindow\Buy1Click;
use frontend\modules\cart\models\form_for_order\Checkout;
use Yii;
use yii\web\Controller;

class AjaxController extends Controller
{

    public function actionCreateOrder()
    {
        $Order = new Order();
        $Buy1Click = new Buy1Click();

        if ($Buy1Click->load(\Yii::$app->request->post()) && $Buy1Click->validate()) {
            $Order->attributes = $Buy1Click->attributes;
            $Order->arr_product = serialize([$Buy1Click->idItem => 1]);


            return $Order->save();
        }

        //если попадает модель, которая следует интерфейсу, то можно создать заказ
    }

    public function actionCheckout()
    {
        $checkout = new Checkout();
        $order = new \frontend\abstractComponents\modules\order\models\Order();

        if ($checkout->load(\Yii::$app->request->post())) {

            $order->attributes = $checkout->attributes;
            $order->arr_product = \Yii::$app->cart->getArrProducts();
            if ($order->save()) {
                return $this->asJson($order);
            } else {
                echo "<pre>";
                print_r($order->errors);
                die();
            }
        }

    }

    public function actionGenerateOrderSuccess()
    {

        $this->layout = 'red_stroyka/main';
        $idOrder = \Yii::$app->request->post('idOrder');

        $order = \frontend\abstractComponents\modules\order\models\Order::findOne(['id' => $idOrder]);

        $goodsInCart = Yii::$app->cart->getProductForCart();
        $totalPrice = Yii::$app->cart->returnCartFullPrice();

        if (isset($idOrder)) {
            $order = \frontend\abstractComponents\modules\order\models\Order::findOne(['id' => $idOrder]);

            //почистить сессию
            Yii::$app->cart->clear();

            return $this->renderAjax('@frontend/abstractComponents/modules/order/views/ajax/successOrder', [
                'order' => $order,
                'goodsInCart' => $goodsInCart,
                'totalPrice' => $totalPrice,
            ]);
        }

    }

    public function generateOrderSuccess()
    {
        $idOrder = \Yii::$app->request->post('idOrder');
    }


}