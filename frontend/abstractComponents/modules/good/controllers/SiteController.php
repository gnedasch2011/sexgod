<?php

namespace frontend\abstractComponents\modules\good\controllers;

use app\models\sexgod\category\CategoryBase;
use app\models\sexgod\good\Goods;
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

    public function actionIndex()
    {
        ini_set('memory_limit', '5000M');


        $arrProp = [
            'Barcode' => 6,
            'Vendor' => 7,
            'VendorID' => 8,
            'VendorCountry' => 9,
            'ProdCountry' => 10,
            'BaseRetailPrice' => 11,
            'BaseWholePrice' => 12,
            'RetailPrice' => 13,
            'WholePrice' => 14,
            'Stock' => 15,
            'ShippingDate' => 16,
            'Description' => 17,
            'Brutto' => 18,
            'Batteries' => 19,
            'Pack' => 20,
            'Material' => 21,
            'Lenght' => 22,
            'Diameter' => 23,
            'Collection' => 24,
            'Color' => 25,
            'Size' => 26,
            'Novelties' => 27,
            'SuperSale' => 28,
            'Bestseller' => 29,
            'Discount' => 30,
            'function' => 31,
            'addfunction' => 32,
            'vibration' => 33,
            'volume' => 34,
            'ModelYear' => 35,
            'ready_to_go' => 36,
            'StopPromo' => 37
        ];
die();
        foreach (Goods::find()->where('id>157467')->batch(1000) as $products) {
            foreach ($products as $product) {
                foreach ($product as $prop => $val) {
                    if (isset($arrProp[$prop]) && !empty($arrProp[$prop])) {

                        $newArr = new AttrProduct();
                        $idProd = $product->aID;
                        $idAttr = $arrProp[$prop];
                        $valAttr = $val;

                        $newArr->product_id = $idProd;
                        $newArr->attr_id = $idAttr;
                        $newArr->value = $valAttr;
                        if (!$newArr->save()) {
                            echo "<pre>";
                            print_r($newArr);
                            die();
                        }
                    }
                }
            }
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
