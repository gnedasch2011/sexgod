<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 10.02.2020
 * Time: 8:40
 */

namespace frontend\abstractComponents\modules\parsers\controllers;


use app\models\shop\Goods;
use frontend\models\parser\ItemParser;
use ParseCsv\Csv;
use yii\web\Controller;

class ParserCsvController extends Controller
{
    public function actionCsv()
    {
        $cache = \Yii::$app->cache;
        $key = 'csvResult21';
        $csvResult = $cache->get($key);

        $fields = ['article', 'categoryParent', 'categoryId', 'name', 'desc', 'manufactury', 'manufacturer_part_number', 'price_retail', 'price_wholesale', 'sale_access', 'in_stock', 'shipment_time', 'the_size', 'color', 'aID', 'material', 'batteries', 'packaging', 'gross_weight', 'photo_150', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'barcode'];
        if ($csvResult === false) {
            $csv = new Csv();
            $csv->auto('p5s_assort.csv');
            $csv->limit = 100000;
            // Сохраняем значение $categories в кэше по ключу. Данные можно получить в следующий раз.
            $cache->set($key, $csv->data);
        } else {
            $goodInBases = \app\models\sexgod\good\Goods::find()->where(['not like', 'photo_150', '.jpg'])->all();

            foreach ($goodInBases as $good) {
                $itemArr = $csvResult[$good->article];
                $good->photo_150 = $itemArr['Фотография 1'];
//                $good->save(false);
            }
            echo "<pre>";
            print_r('ok');
            die();
            for ($i = 0; $i < 27000; $i++) {
                $itemArr = array_values($csvResult[$i]);

                $goodInBase = \app\models\sexgod\good\Goods::find()->where(['article' => $itemArr[0]])->one();
                if (strpos($goodInBase->photo_150, ".jpg")) {
                    continue;
                }
//                $newGood = new \app\models\sexgod\good\Goods();
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