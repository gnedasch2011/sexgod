<?php

namespace frontend\abstractComponents\modules\good\controllers;

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

/** * Site controller
 */
class SiteController extends Controller
{
    public $title;

    public function actionDistillationGoods()
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

        $ids = [669, 5602, 5617, 16363, 39418, 39419, 50084, 71454, 71455, 73808, 73809, 73811, 76345, 76348, 79257, 79262, 80401, 81972, 82272, 82274, 8230882752, 82753, 83060, 98418, 104769, 104784, 104785, 107507, 107535, 109419, 122005, 140063, 140064, 140065, 140066, 140067, 140068, 140069140070, 140071, 140072];
                
        

        foreach (Goods::find()
                     ->select('id,slug,aID')
                     ->where(['id' => $ids])
                     ->asArray()
                     ->batch(1000) as $products) {
            foreach ($products as $product) {
                $slug = $product['slug'] ?? 'continue';
//                echo "<pre>"; print_r($slug);die();
                if ($slug == 'continue') {
                    continue;
                }
                if (strpos($slug, '+')) {

                }

                $aId = $product['aID'];

                $newSlug = str_replace('+', '', $slug);
                Yii::$app->db->createCommand()->update('goods', [
                    'slug' => $newSlug
                ], "id ={$product['id']}")->execute();

//                $good = Yii::$app->db->createCommand('SELECT * FROM sexgod.goods where id = :id')
//                    ->bindValue(':id', $product['id'])
//                    ->queryOne();

                //                foreach ($product as $prop => $val) {
//                    if (isset($arrProp[$prop]) && !empty($arrProp[$prop])) {
//
//                        $newArr = new AttrProduct();
//                        $idProd = $product->aID;
//                        $idAttr = $arrProp[$prop];
//                        $valAttr = $val;
//
//                        $newArr->product_id = $idProd;
//                        $newArr->attr_id = $idAttr;
//                        $newArr->value = $valAttr;
//                        if (!$newArr->save()) {
//                            echo "<pre>";
//                            print_r($newArr);
//                            die();
//                        }
//                    }
//                }


            }
        }

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

    public function actionDetailItem($slugItem)
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        $slugItem = str_replace("/", '', $slugItem);
        $good =
            \frontend\abstractComponents\modules\good\models\Goods::find()
                ->where(['goods.slug' => $slugItem])
                ->with('attrProduct')
                ->one();
        $keywords = $good->name;
        $description = trim($good->name);

        $this->view->registerMetaTag(['name' => 'keyword', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        $this->title = $good->name;

        //Хлебные крошки

        if ($good->parentCategoryUrl) {
            $breadcrumbs[] = $good->parentCategoryUrl;
        }
        $breadcrumbs[] = [
            'label' => $good->name,
//            'url' => [$good->fullUrl]
        ];

        $this->view->params['breadcrumbs'] = $breadcrumbs;


        return $this->render('/site/sexgod/detail/view', [
            'good' => $good,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

}
