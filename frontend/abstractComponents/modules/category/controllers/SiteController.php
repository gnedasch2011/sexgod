<?php

namespace frontend\abstractComponents\modules\category\controllers;

use app\models\sexgod\category\CategoryBase;
use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\modules\good\models\Goods;
use frontend\abstractComponents\modules\url\models\Urls;
use frontend\abstractComponents\widgets\filterCategory\models\Attr;
use frontend\abstractComponents\widgets\filterCategory\models\AttrProduct;
use frontend\models\form\CallLeadForm;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $categoryName = 'category';
    public $title;

    public function actionCategory($categoryName = "")
    {
        if (is_numeric($categoryName)) {
            $categoryModel = CategoryAbstract::findOne(['id' => $categoryName]);

            $categoryName = $categoryModel->slug;
        }


        $attr = Attr::findOne(['id' => 9]);
//               echo "<pre>"; print_r($attr->getValueInAttrProductAndInChildCat(101, 'distinct'));die();

        $paramsGet = Yii::$app->request->queryParams;
        unset($paramsGet['categoryName']);


        if (\Yii::$app->request->get('clearCart')) {
            \Yii::$app->cart->clear();
        }

        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        $categoryName = str_replace("/", '', $categoryName);
        $category = CategoryBase::find()->where(['slug' => $categoryName])->one();


        if(!isset($category->id)) {
            throw new NotFoundHttpException;
        };
        //для пагинации
        $allGoodsInCategoryAndSubCategory = CategoryBase::getAllGoods($category->id, $paramsGet);


        $pages = new Pagination([
            'totalCount' => $allGoodsInCategoryAndSubCategory->count(),
            'pageSize' => 36,

        ]);

        $allGoodsInCategoryAndSubCategory = $allGoodsInCategoryAndSubCategory->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $allCategory = CategoryBase::getAllCategoryInCurrent($category->id);


        //Для Сео
        $this->categoryName = $categoryName;
        $this->title = $category->maskForTitle;
        $keywords = $category->name;

        $this->view->params['h1'] = $category->h1;
        $this->view->params['canonical'] = 'test';

        $description = trim($category->descriptionMeta);


        $this->view->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->hostInfo . "/" . \Yii::$app->request->pathInfo]);
        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);

        //Хлебные крошки
        $breadcrumbs = [];
        if ($category->parentCategory) {

            $breadcrumbs[] = [
                'label' => $category->parentCategory->name,
                'url' => $category->parentCategory->fullUrl
            ];
        }

        $breadcrumbs[] = [
            'label' => $category->name,
            'url' => $category->fullUrl
        ];

        $this->view->params['breadcrumbs'] = $breadcrumbs;

        //Плитки тегов
        $childsCurrentCategory = $category->getChildsCurrentCategory();
        $IdsChildsCurrentCategory = $category->getIdsChildsCurrentCategory();

        return $this->render('sexgod/category/view', [
            'goods' => $allGoodsInCategoryAndSubCategory,
            'allCategory' => $allCategory,
            'category' => $category,
            'pages' => $pages,
            'childsCurrentCategory' => $childsCurrentCategory,
            'IdsChildsCurrentCategory' => $IdsChildsCurrentCategory,

        ]);
    }

    public function actionCategoryWithFilter($urlId = "")
    {
        $attr = \frontend\abstractComponents\modules\attribute\models\Attr::findOne(['id' => 9]);

//     echo "<pre>"; print_r($attr->getValueInAttrProductAndInChildCat(101, 'distinct'));die();

        $this->layout = '@frontend/views/layouts/red_stroyka/main';
        $urlModel = Urls::findOne(['id' => $urlId]);

        $category = CategoryBase::findOne(['id' => $urlModel->param]);
     
        //$paramsGet для атрибутов
        $paramsGet = [];
        $urlModel->params_for_filter = '';
        parse_str($urlModel->params_for_filter,$paramsGet);
        
        $allGoodsInCategoryAndSubCategory = CategoryBase::getAllGoods($category->id, $paramsGet);
        $pages = new Pagination([
            'totalCount' => $allGoodsInCategoryAndSubCategory->count(),
        ]);

        $allGoodsInCategoryAndSubCategory = $allGoodsInCategoryAndSubCategory->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $allCategory = CategoryBase::getAllCategoryInCurrent($category->id);


        //Для Сео
        $this->categoryName = $urlModel->title;
        $this->title = $urlModel->title;
        $keywords = $urlModel->keywords;

        $this->view->params['h1'] = $urlModel->h1;
//        $this->view->params['canonical'] = 'test';

        $description = trim($urlModel->description);


        $this->view->registerLinkTag(['rel' => 'canonical', 'href' => Yii::$app->request->hostInfo . "/" . \Yii::$app->request->pathInfo]);
        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);


        //Хлебные крошки
        $breadcrumbs = [];
        if ($category->parentCategory) {
            $breadcrumbs[] = [
                'label' => $category->parentCategory->name,
                'url' => $category->parentCategory->fullUrl
            ];
        }

        $breadcrumbs[] = [
            'label' => $category->name,
            'url' => $category->fullUrl
        ];

        $this->view->params['breadcrumbs'] = $breadcrumbs;

        //Плитки тегов
        $childsCurrentCategory = $category->getChildsCurrentCategory();
        $IdsChildsCurrentCategory = $category->getIdsChildsCurrentCategory();

        return $this->render('sexgod/category/view', [
            'goods' => $allGoodsInCategoryAndSubCategory,
            'allCategory' => $allCategory,
            'category' => $category,
            'pages' => $pages,
            'childsCurrentCategory' => $childsCurrentCategory,
            'IdsChildsCurrentCategory' => $IdsChildsCurrentCategory,

        ]);
    }

}
