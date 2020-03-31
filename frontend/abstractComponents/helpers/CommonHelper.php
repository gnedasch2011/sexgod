<?php

namespace frontend\abstractComponents\helpers;


use yii\base\Model;

class CommonHelper extends Model
{

    public static function formatPrice($price)
    {
        if ($price <= 0) {
            return 0;
        }

        return number_format($price, 0, '', ' ');

    }
}