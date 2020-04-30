<?php

namespace frontend\abstractComponents\modules\site\models;

use frontend\abstractComponents\modules\good\models\Goods;
use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\modules\brand\models\Brands;
use Yii;
use yii\base\Model;

class SiteMap extends Model

{
    public function getCountAllUrlsGoods()
    {
        //Получаем массив URL из таблицы Sef
        $CountAllUrlsGoods = Goods::find()
            ->select('slug')
            ->asArray()
            ->count();

        return $CountAllUrlsGoods;
    }

    public function getOtherUrls()
    {
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
//
        $allUrls = array_merge($urlsCatsFull, $slugBrandsFull);

        //Формируем двумерный массив. createUrl преобразует ссылки в правильный вид.

        foreach ($allUrls as $url_rule) {
            $urls[] = [Yii::$app->urlManager->createUrl([$url_rule]), 'daily'];
        }

        return $urls;
    }

    public function getUrlGoodsWithOffset($offset, $limit)
    {
        //Получаем массив URL из таблицы Sef
        $urlGoods = Goods::find()
            ->select('slug')
            ->asArray()
            ->offset($offset)
            ->limit($limit)
            ->all();

        //раскидать по нескольким xml
        $urlsGoodsFull = array_map(function ($val) {
            return '/product/' . $val['slug'] . '/';
        }, $urlGoods);


        //Формируем двумерный массив. createUrl преобразует ссылки в правильный вид.
        //Добавляем элемент массива 'daily' для указания периода обновления контента
        foreach ($urlsGoodsFull as $url_rule) {
            $urls[] = [Yii::$app->urlManager->createUrl([$url_rule]), 'daily'];
        }

        return $urls;
    }


}
