<?php

namespace frontend\abstractComponents\modules\brand\controllers;


use app\models\sexgod\category\CategoryBase;
use app\models\sexgod\good\Goods;
use frontend\abstractComponents\modules\brand\models\Brands;
use yii\data\Pagination;
use yii\web\Controller;

class SiteController extends Controller
{
    public $title;

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


//        $this->categoryName = $brandCat->name;


        $minPriceInBrand = $brandCat->minPrice;
        $nameShop = \Yii::$app->params['nameShop'];

        $title = "{$brandCat->name} купить товары бренда по цене от {$brandCat->formatMinPrice} в интернет-магазине {$nameShop}";
        $this->title = $title;
        $this->view->params['h1'] = $brandCat->name;
        $tel = \Yii::$app->params['phone'];

        $keywords = $brandCat->name;

        $description =   "Товары бренда {$brandCat->name} по цене от {$brandCat->formatMinPrice} Бесплатная доставка при заказе от 3000 руб. 100% Анонимность. ☎️ {$tel} — $nameShop";

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
