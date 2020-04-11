<?php

namespace frontend\abstractComponents\modules\good\controllers;

use app\modules\cart\models\Order;
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
        $bestsellers = \Yii::$app->request->post('bestsellers', false);

        $query = \app\models\sexgod\good\Goods::getQuery();
        $query->andWhere(['goods.Bestseller' => 1]);
        $products = \app\models\sexgod\good\Goods::getProducts([
            'query' => $query,
            'featured' => $featured,
            'categoryId' => $dataIdCategory,
            'limit' => 20,
            'offset' => 10,
        ]);

        if ($products) {
            return $this->renderAjax('@frontend/abstractComponents/modules/good/views/ajax/_mainPageFeatures.php', [
                'products' => $products,
            ]);
        }

        return '';

    }


}