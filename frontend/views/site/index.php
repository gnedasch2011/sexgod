<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->context->title = 'Подбор, монтаж и обслуживание систем безопасности, установка камер наблюдения';
$this->registerMetaTag(['name' => 'description', 'content' => 'Подбор, монтаж и обслуживание систем безопасности, установка камер наблюдения']);
$this->registerMetaTag(['name' => 'keyword', 'content' => 'Подбор, монтаж и обслуживание систем безопасности, установка камер наблюдения']);
?>

<div class="row">

    <!--    слайдер-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img src="/css/images/main/camera.png" alt="" class="img_camera">
        <div class="mainSlider">
            <div class="mainSliderImg">
                <div class="blockText">

                    <h2 class="blockText_h2">Подбор, монтаж и обслуживание
                        систем безопасности</h2>
                    <p class="blockText_p hidden-xs">Видеодомофоны без трубки ROCKY WI-FI с
                        возможностью
                        переадресации
                        вызовов на мобильное приложение и удаленного управления замками, а MARILYN
                        WI-FI ещё
                        и с датчиком движения.</p>
                    <div class="slider_button">

                        <a href="#popup:marquiz_5cf39354662fd9002a24b088"
                           class="buttonCallBack  buttonFindProduct">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    БЕСТСЕЛЛЕРЫ-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="form_h2">Имеются в продаже готовые комплекты камер видеонаблюдения</h2>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 block_best">
            <a href="/products/videodomofony" class="block_best_a">
                <img src="/css/images/main/komplekt2.jpg" alt="" width="100%" class="">
                <div class="best_text_right">
                    <div class="best_h2">КОМПЛЕКТЫ
                        ДОМОФОНОВ
                    </div>
                    <div class="best_p hidden-xs">Купите готовые решения для квартиры, офиса и
                        загородного
                        дома.
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                        <a href="#" class="buttonCallBack buttonFindProduct form__call_modal ">Оставить
                            заявку</a>
                    </div>

                </div>
            </a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 block_best">
            <a href="/products/design-solution" class="block_best_a">
                <img src="/css/images/main/banner-nabludenie.jpg" alt="" width="100%" class="">
                <div class="best_text_left">
                    <div class="best_h2">КОМПЛЕКТЫ
                        НАБЛЮДЕНИЯ

                    </div>
                    <div class="best_p hidden-xs">Профессиональное видеонаблюдение с широкими
                        возможностями.
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                        <a href="/products/videodomofony"
                           class="buttonCallBack  form__call_modal buttonFindProduct">Оставить
                            заявку</a>
                    </div>

                </div>
            </a>

        </div>
    </div>

    <!--    форма-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="form_h2 form_h2_success">Нет времени разбираться с выбором системы?
            <br>
            Получите бесплатный
            расчёт стоимости
        </h2>

        <div class="">
            <?php

            use yii\widgets\ActiveForm;
            use  frontend\models\form\CallLeadForm;

            $callLeadForm = new CallLeadForm();

            $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'formLeadSeastem'],
            ]) ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?= $form->field($callLeadForm, 'phone') ?>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?= $form->field($callLeadForm, 'name') ?>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Заказать звонок', ['class' => 'btn btn-primary btn_form_call']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>

        <h2 class="action-h2">СКИДКА 10% на установку видеонаблюдения в выходные дни!</h2>
    </div>


    <!--    Возможности видеонаблюдения-->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="form_h2 form_h2_success">Основными задачами видеонаблюдения являются осуществление защиты и контроля,
            предотвращение инцидентов, значительно реже разбор инцидентов.
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <img src="https://houseguard24.ru/img/stealed/1.jpg" class="img-responsive">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2 class="action-h2">Удаленное видеонаблюдение</h2>
            <h3>
                Вы можете в любой момент и в любом месте увидеть видеотрансляцию с камер при помощи
                мобильных или стационарных устройств, имеющих возможность подключения к
                интернету.</h3>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2 class="action-h2">Ночной режим</h2>
            <h3>Ночное видение у современных камер позволит Вам установить круглосуточную охрану
                объекта. Ряд систем видеонаблюдения обеспечат высокое качество изображение даже без
                дополнительных источников света.</h3>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <img src="https://houseguard24.ru/img/stealed/2.jpg" class="img-responsive">
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <img src="https://houseguard24.ru/img/stealed/3.jpg" class="img-responsive">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2 class="action-h2">Видеоаналитика</h2><h3>
                Системы с возможностями видеоаналитики дают Вам широкие возможности: обнаружение движения, выявление забытых вещей, определение траектории движения объекта, пересечение линии, распознавание лиц, определение автомобильных номеров, улучшение детализации в области интереса, подсчет посетителей и некоторые другие.</h3>
    </div>
        <div class="clearfix"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <h2 class="action-h2">Архивирование видеозаписей</h2><h3>
                Кроме доступа к видео в режиме реального времени Вы можете получить возможность просмотра событий сохраненных системой за определенный период, от 1 дня до 1 месяца и более.</h3>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <img src="https://houseguard24.ru/img/stealed/2.jpg" class="img-responsive">
        </div>
    <!--    ПОПУЛЯРНЫЕ ТОВАРЫ-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="bestseller_h2">Выбор типа видеонаблюдения зависит от размеров объекта, бюджета и
            решаемых задач.
        </h2>
        <?php foreach ($goods as $good): ?>
            <?= $this->render('/site/goods/_item_for_main', [
                'good' => $good
            ]);; ?>

        <?php endforeach; ?>
    </div>
    <!--    Как работает система-->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="form_h2">Трансляцию с камер можно смотреть с компьютера, ноутбука, планшета или
            смартфона везде, где есть интернет.
        </h2>
        <div>
            <img src="/css/images/main/srav.jpg" alt="" class="" width="100%">
        </div>
    </div>

    <!--    Как работает система-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="form_h2">Мы подбираем для Вас оптимальные комплекты видеонаблюдения в рамках
            вашего бюджета
        </h2>
    </div>

    <!-- объекты -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/css/images/main/realized_obj/1.jpg" alt="...">
                </div>
                <?php for ($i = 2; $i < 9; $i++): ?>
                    <div class="item">
                        <img src="/css/images/main/realized_obj/<?= $i; ?>.jpg" alt="...">
                    </div>
                <?php endfor; ?>
            </div>
            <!-- Элементы управления -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Следующий</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap 3 -->


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <h2 class="action-h2">Протестируйте работу приложения для удаленного доступа на своем
            телефоне уже сейчас!</h2>
        <p class="test__p">Закажите расчет видеонаблюдения и получите доступ к тестовому аккаунту.
            Мы направим
            ссылку для скачивания приложения и краткую видеоинструкцию по его работе.</p>
        <br>
        <p class="test__p">Уже сейчас Вы можете оценить работу видеонаблюднения в режиме реального
            времени!</p>


        <div class="test__button_wr">
            <a href="#popup:marquiz_5cf39354662fd9002a24b088"
               class=" buttonCallBack  buttonFindProduct test__button">
                <svg class="t581__arrow-icon " style="fill:#ffe100; "
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180">
                    <path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path>
                </svg>
                Получить доступ</a>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="form_h2">
            Бесплатный выезд инженера для консультации и расчета стоимости
            по всему югу России
            <br>
            <p><a name="top"></a></p>
            <a href="tel:+   <?= Yii::$app->params['phone']; ?>">   <?= Yii::$app->params['phone']; ?></a>

            <br>
            <span class="email_adress_fuck_bot map-cont__p"></h2>
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0a8066160d8d83ea44a750b2c0562a550ecdb72f5d33827ef875d1d50c410b73&amp;width=100%25&amp;height=467&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>

</div>

