<?php


namespace frontend\controllers;


use frontend\models\form\CallLeadForm;
use yii\web\Controller;

class AjaxController extends Controller
{
    public function actionCreateLead()
    {
        $model = new CallLeadForm();
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->save()) {
                $model->sendEmailAdmin();

                return true;
            }
        }
    }
}