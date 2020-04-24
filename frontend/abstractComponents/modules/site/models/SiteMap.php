<?php

namespace frontend\abstractComponents\modules\site\models;

use app\models\sexgod\good\Goods;
use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\modules\brand\models\Brands;
use Yii;
use yii\base\Model;

class SiteMap extends Model
{
    public function getUrl()
    {
        //Получаем массив URL из таблицы Sef
        $urlGoods = Goods::find()
            ->select('slug')
            ->asArray()
//            ->limit(100)
            ->all();

        $urlsGoodsFull = array_map(function ($val) {
            return '/product/' . $val['slug'] . '/';
        }, $urlGoods);



        $urlsCat = CategoryAbstract::find()
            ->select('slug')
            ->asArray()
            ->all();

        $urlsCatsFull = array_map(function ($val) {
            return '/catalog/' . $val['slug'] . '/';
        }, $urlsCat);


        $slugBrands = Brands::find()
            ->select('url')
            ->asArray()
            ->all();

        $slugBrandsFull = array_map(function ($val) {
            return '/brand/' . $val['url'] . '/';
        }, $slugBrands);

      $allUrls = array_merge($urlsGoodsFull,$urlsCatsFull,$slugBrandsFull);

        //Формируем двумерный массив. createUrl преобразует ссылки в правильный вид.
        //Добавляем элемент массива 'daily' для указания периода обновления контента
        foreach ($allUrls as $url_rule) {
            $urls[] = [Yii::$app->urlManager->createUrl([$url_rule]), 'daily'];
        }

        return $urls;
    }

}
