<?php

namespace frontend\abstractComponents\modules\good\controllers;

use app\models\sexgod\category\CategoryBase;
use app\models\sexgod\good\Goods;
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

    public function actionIndex()
    {
        ini_set('memory_limit', '1000M');
        
        foreach (Goods::find()->batch(1000) as $customers) {
            foreach ($customers as $customer) {
                
                echo "<pre>"; print_r($customer);die();
                $customer->Images = str_replace('http:', 'https:', $customer->Images);
                $customer->save();
            }
            // $customers - это массив, в котором находится 10 или меньше объектов класса Customer
        }

        die('ok');
        $this->layout = '@frontend/views/layouts/red_stroyka/main';
        $cache = Yii::$app->cache;

        $allGoods = $cache->getOrSet('allProducts20000', function () {

            return Goods::getProducts([
                'limit' => 20000,
            ]);
        });

        return $this->render('index', [
            'allGoods' => $allGoods,
        ]);


    }

}
