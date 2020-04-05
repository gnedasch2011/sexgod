<?php

namespace frontend\abstractComponents\modules\order\controllers;

use app\modules\cart\models\Order;
use frontend\abstractComponents\widgets\modalWindow\Buy1Click;
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
}