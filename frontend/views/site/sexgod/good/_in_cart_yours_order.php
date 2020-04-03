<tr>
    <td><?= $good->name; ?></td>
    <td> <?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(\Yii::$app->cart->getFullPriceOneGood($good->id)); ?> руб.</td>
</tr>