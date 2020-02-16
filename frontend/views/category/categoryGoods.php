<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div>Категории в категории</div>
        <ul>
            <?php foreach ($listCategoryCurrentLevel as $category): ?>
                <li>
                    <?= Html::a($category->name, ['/category/' . $category->getFullPathParent()]) ?>
                </li>
                <li>
                    <?php echo $category->getFullPathParent(); ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <div>
            <?php

            $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
            ]) ?>
                <?= $form->field($searchForm, 'query') ?>


                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            <?php ActiveForm::end() ?>
        </div>

    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <span>Хлебные крошки</span>
        <hr>
        <h2>Товары</h2>
        <?php foreach ($allGoodsInCategory as $item): ?>
            <?= 'Name: '.$item['name']; ?>
            <br>
            <?= 'Price: '. $item['price']; ?>
            <hr>
        <?php endforeach; ?>
    </div>
</div>


