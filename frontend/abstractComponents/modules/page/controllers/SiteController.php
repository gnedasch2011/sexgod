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

    public function actionAbout()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/about');
    }

    public function actionContacts()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/contacts');
    }

    public function actionDostavka()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/dostavka');
    }

    public function actionOplata()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/oplata');
    }

    public function actionAnonimnost()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/anonimnost');
    }

    public function actionGarantiya()
    {
        $this->layout = '@frontend/views/layouts/red_stroyka/main';

        return $this->render('/sexgod/garantiya');
    }


    public function siteMap()
    {
        return $this->render('/sexgod/garantiya');
    }

}
