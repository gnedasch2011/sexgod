<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 10.02.2020
 * Time: 8:40
 */

namespace frontend\abstractComponents\modules\parser\controllers;


use app\models\shop\Goods;
use frontend\models\parser\ItemParser;
use ParseCsv\Csv;
use yii\web\Controller;

class ParserCsvController extends Controller
{
    public function actionCsv()
    {
    
        $cache = \Yii::$app->cache;
        $key = 'test';
        $csvResult = $cache->get($key);



        $fields = ['prodID','aID','Barcode','ProdName','VendorCode','Vendor','VendorID','VendorCountry','ProdCountry','BaseRetailPrice','BaseWholePrice','Stock','ShippingDate','Description','Brutto','Batteries','Pack','Material','Lenght','Diameter','Collection','Images','Category','SubCategory','Color','Size','Novelties','SuperSale','Bestseller','RetailPrice','WholePrice','Discount','prodUrl','function','addfunction','vibration','volume','ModelYear','img_status','ready_to_go','StopPromo','slug','photo_150','Brutto_length', 'Brutto_width', 'Brutto_height'];

        if ($csvResult === false) {
            $csv = new Csv();
            $csv->auto('csv/test.csv');
            $csv->limit = 100000;
           
            // Сохраняем значение $categories в кэше по ключу. Данные можно получить в следующий раз.

            $cache->set($key, $csv->data);
        } else {
            $goodsInBases = \frontend\abstractComponents\modules\good\models\Goods::find()
                ->limit(100)
                ->all();
        
            foreach ($goodsInBases as $good) {    
             
                $itemArr = $csvResult[$good];

                $good->photo_150 = $itemArr['Фотография 1'];
//                $good->save(false);
            }
            echo "<pre>";
            print_r('ok');
            die();
            for ($i = 0; $i < 27000; $i++) {
                $itemArr = array_values($csvResult[$i]);

                $goodInBase = \frontend\abstractComponents\modules\good\models\Goods::find()->where(['article' => $itemArr[0]])->one();
                if (strpos($goodInBase->photo_150, ".jpg")) {
                    continue;
                }
//                $newGood = new \frontend\abstractComponents\modules\good\models\Goods();
//                for ($j = 0; $j < count($fields); $j++) {
//                    $newGood->{$fields[$j]} = $itemArr[$j];
//                }

                if ($goodInBase) {
                    $goodInBase->photo_150 = $itemArr[19];

                    if (!$goodInBase->save(false)) {
                        echo $goodInBase->article;
                        echo '<br>';
                    }
                }


            }
        }
    }

}