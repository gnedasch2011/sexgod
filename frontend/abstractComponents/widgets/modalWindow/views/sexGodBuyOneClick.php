<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\abstractComponents\widgets\modalWindow\assets\ModalAssets;

//ModalAssets::register($this);
?>
<div class="modal-call">
    <div class="modal-header">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hidden-xs">
            <div class="call-phone-i"><i class="fa fa-phone call-phone-i__fa "></i>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 modal__title_call">
            <div><h2 class="modal-header__title">Купить в один клик</h2></div>
            <div class="modal-header__text"><p>Представьтесь, мы вам перезвоним.</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="modal-header__close"><i
                        class="fa fa-close modal-header__close__fa"
                        data-dismiss="modal"></i></div>
        </div>
    </div>

    <div class="row modalBuy1clickForGood">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img src="<?= $good->previewImg; ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <h4><?= $good->name; ?></h4>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <h4><?= $good->price; ?> руб.</h4>
        </div>
    </div>
    <div class="modal-form" data-test="test">
        <?php $form = ActiveForm::begin([
            'method' => 'post',
            'id' => 'sexGodBuyOneClick',
            'action' => ['/order/ajax/create-order'],
            'options' => ['class' => 'form-horizontal text-center form_modal',
            ],

        ]); ?>
        <!-- Блок для ввода логина -->
        <?= Html::hiddenInput('Buy1Click[idItem]', $good->id); ?>

        <div class="form-group has-feedback modal__login_input">
            <label for="number" class="control-label col-xs-4">Телефон:</label>
            <div class="col-xs-12">
                <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>

                    <input class="phone_mask form-control"

                           required="required"
                           name="Buy1Click[phone]">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <!-- Блок для ввода email -->
        <div class="form-group has-feedback">
            <label for="email" class="control-label col-xs-4">Email:</label>
            <div class="col-xs-12">
                <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" required=""
                           name="Buy1Click[email]">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>

        <div class="form-group has-feedback">
            <label for="text_order" class="control-label col-xs-4">Текст
                сообщения:</label>
            <div class="col-xs-12">
                <div class="input-group">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span>
                    <textarea type="text_order" class="form-control"
                              name="Buy1Click[text_from_client]"></textarea>
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div>
        <div>
            <label for="robotCheck"> Я не робот</label>
            <input type="checkbox"
                   name="Buy1Click[robotCheck]">
        </div>
        <!-- Конец блока для ввода email-->
        <div class="modal-footer modal-footer__call">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center c-buttoon-call__send">
                <?= Html::submitButton('Отправить', ['class' => 'c-buttoon-call__call sexGodBuyOneClick_send']) ?>
            </div>
        </div>
    </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
</div>
</div>
</div>

<?php
$js = <<<JS
  $(document).on('click','.buyOneClick',function (e) {
         e.preventDefault();
            $("#modalBuyOneClick").modal('show');
  })
      
    
    $('#modalBuyOneClick').on('beforeSubmit', function(){
       
       var data = $(this);
       
        $.ajax({
            url: data.attr('action'),
            type: data.attr('method'),
            data: data.serializeArray() ,
            
            success: function(res){  
                $('.modal-header__title').text('Успешно отправлено').css({"color":"#5baa00"});
                $('.modal-header__text p').text('Скоро мы вам перезвоним');
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
        return false;
    });
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($js, yii\web\View::POS_END);

?>

