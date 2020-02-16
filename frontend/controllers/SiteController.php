<?php

namespace frontend\controllers;

use app\models\sexgod\CategoryBase;
use app\models\sexgod\GoodsCategory;
use app\models\shop\Category;
use frontend\abstractComponents\models\CategoryAbstract;
use frontend\models\form\CallLeadForm;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\shop\Goods;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public $title;
    public $layout = 'category';
    public $categoryName = 'category';
    public $itemsMenu = [];

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['created_at'],
                ],
            ],

            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {
        $goods = \app\models\sexgod\Goods::find()->all();
        $categorys = CategoryBase::find()->all();
//        foreach ($categorys as $category) {
//            if(!$category->save()){
//                echo "<pre>"; print_r($category->errors);die();
//            };
//        }
//        foreach ($goods as $good) {
//            $good->slug = $this->slugify($good->name);
//            if(!$good->save(false)){
//                echo "<pre>"; print_r($good->errors);die();
//            }
//        }
die();
        $this->layout = 'main';
        $params['popular'] = 1;

        $model = new CallLeadForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            echo '<pre>';
            print_r($model);
            die();
        }
        $goods = Goods::getProducts($params);


        $keywords = 'купить установка скидки ';
        $description = trim($category->name) . '. Покупка и монтаж, скидки на весь сезон! ';

        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);


        return $this->render('index', [
            'goods' => $goods
        ]);
    }

    public function slugify($string)
    {

        $translit = "Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();";
        $string = transliterator_transliterate($translit, $string);
        $string = preg_replace('/[-\s]+/', '-', $string);
        return trim($string, '-');
    }


    public function actionSupport()
    {
        return $this->render('support', [

        ]);
    }

    public function actionCategory($categoryName = "")
    {
        $category = CategoryAbstract::find()->where(['slug' => $categoryName])->one();

        $allGoodsInCategoryAndSubCategory = CategoryAbstract::getAllGoods($category->id);
        
        $allCategory = CategoryAbstract::getAllCategoryInCurrent($category->id);
        $this->title = $category->name;
        $this->categoryName = $categoryName;


        $keywords = 'купить установка скидки ' . $category->name;
        $description = trim($category->name) . '. Покупка и монтаж, скидки на весь сезон! ';

        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);

        return $this->render('sexgod/category/view', [
            'goods' => $allGoodsInCategoryAndSubCategory,
            'allCategory' => $allCategory
        ]);
    }

    public function actionDetailItem($slugItem)
    {
        $good = \app\models\sexgod\Goods::find()->where(['slug' => $slugItem])
            ->one();

        $keywords = 'купить установка скидки ' . $good->name;
        $description = trim($good->name) . '. Покупка и монтаж, скидки на весь сезон! ';

        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);

        return $this->render('@currentSiteView/good/detailItem', [
            'good' => $good,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionCallLeadForm()
    {

        $model = new CallLeadForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $date = new \DateTime('now', new \DateTimeZone('Europe/Moscow'));

            $model->create_date = $date->format('y-M-d H:i:s');
            if ($model->robotCheck == "on") {
                $model->save(false);

                $model->sendEmailUser($model->email);
                return $model->sendEmailAdmin();
            }
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            print_r($model->errors);
            return 'not_ok';
        }

    }
}
