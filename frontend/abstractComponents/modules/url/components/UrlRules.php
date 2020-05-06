<?php

namespace frontend\abstractComponents\modules\url\components;

use frontend\abstractComponents\modules\url\models\Urls;
use yii\base\BaseObject;
use yii\web\UrlRuleInterface;

class UrlRules extends \yii\web\UrlRule
{
    public function init()
    {
        parent::init();
    }


    public function createUrl($manager, $route, $params)
    {

      return true;

    }

    public function parseRequest($manager, $request)
    {

        $pathInfo = $request->getPathInfo();
        $clearPath = substr($pathInfo, 0, -1);

        $route = Urls::find()->where([
            'alias' => $clearPath,
            'route' => 'category/site/category-with-filter',
        ])->one()
        ;


        if ($route) {

            return [
                $route->getAttribute('route'),
                [
                    'urlId' => $route->getAttribute('id'),
                ]
            ];
        }
        return false;  // данное правило не применимо
    }
}