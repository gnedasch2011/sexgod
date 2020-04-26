<?php

use backend\assets\AppAsset;
use frontend\assets\LightBoxAsset;
use frontend\assets\MaskAsset;

LightBoxAsset::register($this);
MaskAsset::register($this);
?>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h1><?= $good->name; ?></h1>
            <img width="100%" src="<?= $good->mainImg; ?>" alt="" class="">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-block-miniImg">
                    <?php foreach ($good->listImagesWithoutMain as $imgMini): ?>
                        <div class="wrap-min-img">
                            <a href="<?= $imgMini; ?>" data-lightbox="image-1"
                               data-title="<?= $good->name; ?>"><img
                                        src="<?= $imgMini; ?>" class="detailItem-img-mini" alt=""
                                        class=""></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <? //php echo "<pre>"; print_r($good->listImagesWithoutMain);die();?>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 descriptionItem">
            <div class="itemInfo"
                 data-price="<?= $good->price; ?>"
                 data-id="<?= $good->id; ?>"
            >

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border_bottom">
                <div><strong>Розничная цена:</strong></div>
                <div class="priceDetail"><?= $good->renderPrice ?></div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blockButtonInCart border_bottom">

                <div class="gp-buttons itemCart" data-id=<?= $good->id ;?>>
                    <span class="gp-minus">-</span>
                    <span class="gp-count" contenteditable="true">1</span>
                    <span class="gp-plus">+</span>
                </div>
                <a class="buttonFindProduct buttonInCart addItemInCart">В корзину</a>
                <a class="buttonFustBuy" title="Быстрая покупка"> <i class="fa fa-shopping-basket"></i></a>
                <!--            <span>Удалить</span>-->
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-qustions border_bottom">
                ВОЗНИКЛИ ВОПРОСЫ? ЗВОНИТЕ!<br>
                <p> <?= Yii::$app->params['phone']; ?></p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="availibility-block">
                    <p>Наличие: Есть в наличии
                    </p>
                    <p>Гарантия: 12 месяцев</p>
                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
            <ul class="nav nav-tabs">
                <?php if ($good->attributies): ?>
                    <li class="active"><a data-toggle="tab" href="#panel1">Спецификация</a></li>
                <?php endif; ?>
                <?php if ($good->files): ?>
                    <li><a data-toggle="tab" href="#panel2">Скачать</a></li>
                <?php endif; ?>

                <?php if ($good->description): ?>
                    <li><a data-toggle="tab" href="#panel3">Описание</a></li>
                <?php endif; ?>

            </ul>
            <div class="tab-content">
                <div id="panel1" class="tab-pane fade in active mt20">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                        <table class="attrTable">
                            <?php $i = 0; ?>
                            <?php foreach ($good->attributies as $attr): ?>
                                <tr <?php if ($i % 2 == 0) {
                                    echo 'class="oddAttr"';
                                }; ?>>
                                    <td><?= $attr->name; ?></td>
                                    <td><?= $good->getAttrValue($attr->id); ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>

                <div id="panel2" class="tab-pane fade mt20">
                    <?php foreach ($good->files as $file): ?>
                        <div><a href="/files/products/<?= $file->file_path; ?>"
                                class=""><?= $file->name; ?></a></div><br>

                    <?php endforeach; ?>
                    <p>На сайте указаны рекомендуемые розничные цены.
                    </p>
                    <p> Просим уточнять актуальную стоимость оборудования у своего менеджера.</p>

                </div>
                <?php if ($good->description): ?>
                    <div id="panel3" class="tab-pane fade mt20">
                        <?= $good->description; ?>
                    </div>
                <?php endif; ?>


            </div>




        </div>


    </div>
