<?php

namespace frontend\abstractComponents\modules\brand\controllers;


use app\models\sexgod\category\CategoryBase;
use app\models\sexgod\good\Goods;
use frontend\abstractComponents\modules\brand\models\Brands;
use yii\data\Pagination;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actionIndex($brandName)
    {
        if (\Yii::$app->request->get('clearCart')) {
            \Yii::$app->cart->clear();
        }

        $this->layout = '@frontend/views/layouts/red_stroyka/main';


        $brandName = str_replace("/", '', $brandName);
        $brandCat = Brands::find()->where(['url' => $brandName])->one();

        //для пагинации


        $allGoodsInCategoryAndSubCategory = $brandCat->getGoods();
        $pages = new Pagination(['totalCount' => $allGoodsInCategoryAndSubCategory->count()]);

        $allGoodsInCategoryAndSubCategory = $allGoodsInCategoryAndSubCategory->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $allCategory = [];


        //Для Сео
//        $this->categoryName = $brandCat->name;

        $keywords = $brandCat->name;

        $this->view->params['h1'] = $brandCat->name;

        $description = trim($brandCat->name);

        $this->view->registerLinkTag(['rel' => 'canonical', 'href' => "/" . \Yii::$app->request->pathInfo]);
        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);


        //Хлебные крошки
        $breadcrumbs = [];

        $breadcrumbs[] = [
            'label' => 'Бренд',
//            'url' => [$brandCat->fullUrl]
        ];

        $breadcrumbs[] = [
            'label' => $brandCat->name,
//            'url' => [$brandCat->fullUrl]
        ];

        $this->view->params['breadcrumbs'] = $breadcrumbs;

        //Плитки тегов

        $childsCurrentCategory = $brandCat->getRelatedCategory();

        return $this->render('@frontend/views/site/sexgod/category/view.php', [
            'goods' => $allGoodsInCategoryAndSubCategory,
            'allCategory' => $allCategory,
            'breadcrumbs' => $breadcrumbs,
            'category' => $brandCat,
            'pages' => $pages,
            'childsCurrentCategory' => $childsCurrentCategory,

        ]);

    }


}
