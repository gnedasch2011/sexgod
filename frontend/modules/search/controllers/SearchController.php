<?php


namespace app\modules\search\controllers;


use app\models\shop\Goods;
use app\modules\search\models\Search;
use yii\web\Controller;

class SearchController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = 'category';
    public $title = 'Поиск';

    public function actionIndex()
    {
        $search = new Search();
        $productsModel = [];
        if ($search->load(\Yii::$app->request->post())) {
            $params['name'] = $search->search;

            $productsModels = \app\models\sexgod\Goods::getProducts($params);

        };

        return $this->render('search', [
            'products' => $productsModels,
            'search' => $search,
        ]);
    }
}