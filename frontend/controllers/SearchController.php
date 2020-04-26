<?php


namespace frontend\controllers;


use app\models\shop\Goods;
use app\models\videoshop\search\Search;
use yii\web\Controller;

class SearchController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = 'category';
    public $title = 'Поиск';

    public function actionIndex()
    {
        $search = new Search();
        $productsModels = [];
        if ($search->load(\Yii::$app->request->post())) {
            $params['name'] = $search->search;
            $productsModels = \frontend\abstractComponents\modules\good\models\Goods::getProducts($params);
        };

        return $this->render('search', [
            'products' => $productsModels,
            'search' => $search,
        ]);
    }
}