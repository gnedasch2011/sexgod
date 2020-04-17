<?php

namespace frontend\abstractComponents\modules\page\controllers;


use yii\web\Controller;

class SiteController extends Controller
{
    public $title;


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionAboutUs()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/aboutUs');
    }

    public function actionBlog()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/aboutUs');
    }

    public function actionСontacts()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/aboutUs');
    }

    public function actionDelivery()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/aboutUs');
    }

    public function actionWaysOfPayment()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/aboutUs');
    }


}
