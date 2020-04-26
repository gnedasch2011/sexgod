<?php

namespace frontend\abstractComponents\modules\category\controllers;

use frontend\abstractComponents\modules\good\models\Goods;
use app\modules\cart\models\Order;
use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\widgets\modalWindow\Buy1Click;
use frontend\modules\cart\models\form_for_order\Checkout;
use Yii;
use yii\web\Controller;

class AjaxController extends Controller
{

    public function actionGetFuturesProductsInCategory()
    {
        $dataIdCategory = \Yii::$app->request->post('dataIdCategory');
        $featured = \Yii::$app->request->post('featured', false);
        $random = \Yii::$app->request->post('random', false);
        $limit = \Yii::$app->request->post('limit', 4);
        $newGood = \Yii::$app->request->post('newGood', false);


        $query = \frontend\abstractComponents\modules\good\models\Goods::getQuery();

        if ($featured) {
            $query->andWhere(['goods.Bestseller' => 1]);
        }

        //вернуть бестселлера из этой категории
        if ($random && $featured) {
            $randomBestsellers = CategoryAbstract::getRandomBestsellers($dataIdCategory, $limit);
            if ($randomBestsellers) {
                $query->andWhere(['goods.id' => $randomBestsellers]);
            }
        }

        //вернуть бестселлера из этой категории
        if ($random && $newGood) {
            $randomBestsellers = CategoryAbstract::getNewGoods($dataIdCategory, $limit);
            if ($randomBestsellers) {
                $query->andWhere(['goods.id' => $randomBestsellers]);
            }
        }


        $products = \frontend\abstractComponents\modules\good\models\Goods::getProducts([
            'query' => $query,
            'categoryId' => $dataIdCategory,
            'limit' => $limit,
        ]);

        if ($products) {
            return $this->renderAjax('@frontend/abstractComponents/modules/good/views/ajax/_mainPageFeatures.php', [
                'items' => $products,
            ]);
        }

        return false;

    }

    public function actionGetProducts()
    {
        $getProductsParams = \Yii::$app->request->post('getProductsParams');

        if ($getProductsParams) {
            $products = Goods::generateQueryFromParams($getProductsParams);
        }

        if ($products) {
            return $this->renderAjax('@frontend/abstractComponents/modules/good/views/ajax/_mainPageFeatures.php', [
                'items' => $products,
            ]);
        }

        return false;

    }

}