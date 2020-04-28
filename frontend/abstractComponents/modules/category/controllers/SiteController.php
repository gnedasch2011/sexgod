<?php

namespace frontend\abstractComponents\modules\category\controllers;

use app\models\sexgod\category\CategoryBase;
use frontend\abstractComponents\modules\good\models\Goods;
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

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $categoryName = 'category';
    public $title;

    public function actionCategory($categoryName = "")
    {
        if (\Yii::$app->request->get('clearCart')) {
            \Yii::$app->cart->clear();
        }

        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        $categoryName = str_replace("/", '', $categoryName);
        $category = CategoryBase::find()->where(['slug' => $categoryName])->one();

        //для пагинации
        $allGoodsInCategoryAndSubCategory = CategoryBase::getAllGoods($category->id);

        $pages = new Pagination(['totalCount' => $allGoodsInCategoryAndSubCategory->count()]);

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
                'url' => [$category->parentCategory->fullUrl]
            ];
        }

        $breadcrumbs[] = [
            'label' => $category->name,
            'url' => [$category->fullUrl]
        ];

        $this->view->params['breadcrumbs'] = $breadcrumbs;


        //Плитки тегов
        $childsCurrentCategory = $category->getChildsCurrentCategory();


        return $this->render('sexgod/category/view', [
            'goods' => $allGoodsInCategoryAndSubCategory,
            'allCategory' => $allCategory,
//            'breadcrumbs' => $breadcrumbs,
            'category' => $category,
            'pages' => $pages,
            'childsCurrentCategory' => $childsCurrentCategory,

        ]);
    }

}
