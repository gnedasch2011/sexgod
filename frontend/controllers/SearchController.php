<?php


namespace frontend\controllers;


use app\models\shop\Goods;
use app\models\shop\search\Search;
use yii\web\Controller;

class SearchController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = 'category';
    public $title = 'Поиск';

    public function actionIndex()
    {
        $search = new Search();
        $products = [];

        if($search->load(\Yii::$app->request->post())){
            $params['name'] = $search->search;
            $products = Goods::getProducts($params);
        };

        return $this->render('search', [
            'products'=>$products,
            'search'=>$search,
        ]);
    }
}