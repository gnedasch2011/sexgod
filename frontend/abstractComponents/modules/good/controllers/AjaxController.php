<?php

namespace frontend\abstractComponents\modules\good\controllers;

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
//         $bestsellers = \Yii::$app->request->post('bestsellers', false);

        $query = \app\models\sexgod\good\Goods::getQuery();

        if ($featured) {
            $query->andWhere(['goods.Bestseller' => 1]);
        }
//        $dataIdCategory = 101;
        $randomBestsellers = CategoryAbstract::getRandomBestsellers($dataIdCategory);

        //вернуть 4 бестселлера из этой категории
        if ($random && $featured) {
            $randomBestsellers = CategoryAbstract::getRandomBestsellers($dataIdCategory);
            if ($randomBestsellers) {
                $query->andWhere(['goods.id' => $randomBestsellers]);
            }
        }


        $products = \app\models\sexgod\good\Goods::getProducts([
            'query' => $query,
            'categoryId' => $dataIdCategory,
            'limit' => 4,
        ]);


        if ($products) {
            return $this->renderAjax('@frontend/abstractComponents/modules/good/views/ajax/_mainPageFeatures.php', [
                'items' => $products,
            ]);
        }

        return false;

    }


}