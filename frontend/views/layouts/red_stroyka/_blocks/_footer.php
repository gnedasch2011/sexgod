</div>

<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Контакты</h5>
                            <div class="footer-contacts__text">
                                <?= Yii::$app->params['ipe']; ?> <br>
								ИНН:  <?= Yii::$app->params['inn']; ?><br>
								ОГРНИП:  <?= Yii::$app->params['orgnip']; ?>
                            </div>
                            <ul class="footer-contacts__contacts">
                                <li><i class="footer-contacts__icon fas fa-globe-americas"></i> <?= Yii::$app->params['address']; ?>
                                </li>
                                <li><i class="footer-contacts__icon far fa-envelope"></i>
                                    <?= Yii::$app->params['email']; ?>
                                </li>
                                <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> <?= Yii::$app->params['phone']; ?>
                                </li>
                                <li><i class="footer-contacts__icon far fa-clock"></i><?= Yii::$app->params['workingHours']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Информация</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="/about/"
                                                                  class="footer-links__link">О магазине</a></li>
                                <li class="footer-links__item"><a href="/dostavka/"
                                                                  class="footer-links__link">Доставка</a></li>
                                <li class="footer-links__item"><a href="/oplata/"
                                                                  class="footer-links__link">Оплата</a></li>
                                <li class="footer-links__item"><a href="/anonimnost/"
                                                                  class="footer-links__link">Гарантия анонимности</a>
                                </li>
                                <li class="footer-links__item"><a href="/garantiya/"
                                                                  class="footer-links__link">Гарантия и возврат</a></li>
                                <li class="footer-links__item"><a href="/sitemap.html"
                                                                  class="footer-links__link">Карта сайта</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Сервис</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Личный кабинет</a></li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Мои заказы</a></li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Программа лояльности</a></li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Блог</a>
                                </li>
                                 </ul>
                        </div>
                    </div>
					
					
					
					<div class="col-12 col-md-12 col-lg-4">
					 <div class="site-footer__widget footer-newsletter">
					 <h5 class="footer-newsletter__title">Скидки</h5>
					<img src="/template/red_stroyka/images/test/banner_footer.jpg">
					</div>
					</div>
					
				
				<!--  	
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Рассылка</h5>
                            <div class="footer-newsletter__text">
                                Подпишись, чтобы не упустить скидки
                            </div>
                            <form action="" class="footer-newsletter__form">
                                <label class="sr-only" for="footer-newsletter-address">Введите свой email</label>
                                <input type="text"
                                       class="footer-newsletter__form-input form-control"
                                       id="footer-newsletter-address"
                                       placeholder="Введите свой email">
                                <button class="footer-newsletter__form-button btn btn-primary">
                                    Подписаться
                                </button>
                            </form>
                            <div class="footer-newsletter__text footer-newsletter__text--social">
                                Подпишись на нас в соц. сетях
                            </div>
                            <ul class="footer-newsletter__social-links">
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook">
                                    <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter">
                                    <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube">
                                    <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-youtube"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram">
                                    <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--rss">
                                    <a href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="fas fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
         <!--  <div class="site-footer__bottom">
                <div class="site-footer__copyright">
                    Powered by HTML — Design by <a href="https://themeforest.net/user/kos9"
                                                   target="_blank">Kos</a>
                </div>
                <div class="site-footer__payments">
                    <img src="/template/red_stroyka/images/payments.png" alt="">
                </div>
            </div> -->
        </div>
        <div class="totop">
            <div class="totop__body">
                <div class="totop__start"></div>
                <div class="totop__container container"></div>
                <div class="totop__end">
                    <button type="button" class="totop__button">
                        <svg width="13px" height="8px">
                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-up-13x8"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- site__footer / end -->
</div>
<!-- site / end -->
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Меню</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="/template/red_stroyka/images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse
                data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Для неё</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(269); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(269); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(163); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(163); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(717); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(717); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(592); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(592); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(101); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(101); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(457); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(457); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(484); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(484); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(261); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(261); ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Для него</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(685); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(685); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(449); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(449); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(478); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(478); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(468); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(468); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(675); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(675); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(392); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(392); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(657); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(657); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(492); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(492); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>                    
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Для двоих</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(431); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getH1ById(431); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(212); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getH1ById(212); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(542); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getH1ById(542); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(424); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getH1ById(424); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(677); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(677); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(670); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(670); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(646); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(646); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(673); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(673); ?></a>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(674); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(674); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>
				
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">BDSM</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(637); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(637); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(638); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(638); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(639); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(639); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(640); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(640); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(642); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(642); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(645); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(645); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(650); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(650); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(648); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(648); ?></a>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(663); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(663); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Одежда</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(669); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(669); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(683); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(683); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(701); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(701); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(697); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(697); ?></a>
                                </div>                            
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Лубриканты</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(593); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(593); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(594); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(594); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(595); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(595); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(598); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(598); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(599); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(599); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(602); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(602); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(600); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(600); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(614); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(614); ?></a>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(615); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(615); ?></a>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(616); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(616); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Полезное</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(675); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(675); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(678); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(678); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(677); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(677); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(668); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(668); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(679); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(679); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(676); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(676); ?></a>
                                </div>
                            </li>							
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a class="mobile-links__item-link">Информация</a>
                        <button class="mobile-links__item-toggle" type="button"
                                data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="/contacts/" class="mobile-links__item-link">Контакты</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(449); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(449); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(478); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(478); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(468); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(468); ?></a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(675); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(675); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(392); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(392); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(657); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(657); ?></a>
                                </div>
                            </li>
							<li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="<?= frontend\abstractComponents\models\CategoryAbstract::getLinkById(492); ?>" class="mobile-links__item-link"><?= frontend\abstractComponents\models\CategoryAbstract::getNameById(492); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
<!--            <button class="pswp__button pswp__button--arrow--left"-->
<!--                    title="Previous (arrow left)"></button>-->
<!--            <button class="pswp__button pswp__button--arrow--right"-->
<!--                    title="Next (arrow right)"></button>-->
<!--            <div class="pswp__caption">-->
<!--                <div class="pswp__caption__center"></div>-->
<!--            </div>-->
        </div>
    </div>
</div>