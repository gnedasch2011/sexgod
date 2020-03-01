<?php


namespace frontend\controllers;


use app\models\sexgod\Goods;
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

    public function actionGetModalBuy1Click()
    {
        $idItem = \Yii::$app->request->get('id');
        $good = Goods::findOne(['id' => $idItem]);

        return $this->renderAjax('@frontend/abstractComponents/widgets/modalWindow/views/sexGodBuyOneClick', [
            'good' => $good,
        ]);
    }



}