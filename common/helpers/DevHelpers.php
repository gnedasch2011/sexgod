<?php

namespace common\helpers;

class DevHelpers extends \yii\base\Model
{

    public static function localDevelop()
    {
        $host = $_SERVER['HTTP_HOST'];

        if (strpos($host, 'loc')) {
            return true;
        }

        return false;
    }
}