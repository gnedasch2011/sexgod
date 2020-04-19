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
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">О магазине</a></li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Доставка</a></li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Оплата</a></li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Гарантия анонимности</a>
                                </li>
                                <li class="footer-links__item"><a href=""
                                                                  class="footer-links__link">Гарантия и возврат</a></li>
                                <li class="footer-links__item"><a href=""
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
                        <a href="index.html" class="mobile-links__item-link">Для женщин</a>
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
                                    <a href="index.html" class="mobile-links__item-link">Вибраторы</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-2.html" class="mobile-links__item-link">Фаллоимитаторы</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-3.html" class="mobile-links__item-link">Анальные пробки</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="index-4.html" class="mobile-links__item-link">Страпоны</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="offcanvas-cart.html" class="mobile-links__item-link">Вагинальные шарики</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Для мужчин</a>
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
                                    <a href="" class="mobile-links__item-link">Мастурбаторы</a>
                                    <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px"
                                             height="7px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href=""
                                                   class="mobile-links__item-link">Массажёры простаты</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href=""
                                                   class="mobile-links__item-link">Эрекционные кольца</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Секс-куклы</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Pneumatic
                                                    Tools</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Machine Tools</a>
                                    <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px"
                                             height="7px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Thread
                                                    Cutting</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Chip
                                                    Blowers</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Sharpening
                                                    Machines</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Pipe
                                                    Cutters</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="" class="mobile-links__item-link">Slotting
                                                    machines</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href=""
                                                   class="mobile-links__item-link">Lathes</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Для пар</a>
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
                                    <a href="shop-grid-3-columns-sidebar.html"
                                       class="mobile-links__item-link">Shop Grid</a>
                                    <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px"
                                             height="7px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-3-columns-sidebar.html"
                                                   class="mobile-links__item-link">3 Columns
                                                    Sidebar</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-4-columns-full.html"
                                                   class="mobile-links__item-link">4 Columns
                                                    Full</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="shop-grid-5-columns-full.html"
                                                   class="mobile-links__item-link">5 Columns
                                                    Full</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-list.html" class="mobile-links__item-link">Shop
                                        List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="shop-right-sidebar.html"
                                       class="mobile-links__item-link">Shop Right Sidebar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="product.html"
                                       class="mobile-links__item-link">Product</a>
                                    <button class="mobile-links__item-toggle" type="button"
                                            data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px"
                                             height="7px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product.html"
                                                   class="mobile-links__item-link">Product</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product-alt.html"
                                                   class="mobile-links__item-link">Product Alt</a>
                                            </div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title">
                                                <a href="product-sidebar.html"
                                                   class="mobile-links__item-link">Product
                                                    Sidebar</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="/cart/" class="mobile-links__item-link">Cart</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="cart-empty.html" class="mobile-links__item-link">Cart
                                        Empty</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="checkout.html"
                                       class="mobile-links__item-link">Checkout</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="order-success.html" class="mobile-links__item-link">Order
                                        Success</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="wishlist.html"
                                       class="mobile-links__item-link">Wishlist</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="compare.html"
                                       class="mobile-links__item-link">Compare</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="track-order.html" class="mobile-links__item-link">Track
                                        Order</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="account-login.html" class="mobile-links__item-link">BDSM</a>
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
                                    <a href="account-login.html" class="mobile-links__item-link">Login</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-dashboard.html"
                                       class="mobile-links__item-link">Dashboard</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-profile.html" class="mobile-links__item-link">Edit
                                        Profile</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-orders.html" class="mobile-links__item-link">Order
                                        History</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-order-details.html"
                                       class="mobile-links__item-link">Order Details</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-addresses.html"
                                       class="mobile-links__item-link">Address Book</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-edit-address.html"
                                       class="mobile-links__item-link">Edit Address</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="account-password.html" class="mobile-links__item-link">Change
                                        Password</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="blog-classic.html" class="mobile-links__item-link">Эротическая одежда</a>
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
                                    <a href="blog-classic.html" class="mobile-links__item-link">Blog
                                        Classic</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-grid.html" class="mobile-links__item-link">Blog
                                        Grid</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-list.html" class="mobile-links__item-link">Blog
                                        List</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="blog-left-sidebar.html"
                                       class="mobile-links__item-link">Blog Left Sidebar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="post.html" class="mobile-links__item-link">Post
                                        Page</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="post-without-sidebar.html"
                                       class="mobile-links__item-link">Post Without Sidebar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Смазки и лубриканты</a>
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
                                    <a href="about-us.html" class="mobile-links__item-link">About
                                        Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="contact-us.html" class="mobile-links__item-link">Contact
                                        Us</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="contact-us-alt.html" class="mobile-links__item-link">Contact
                                        Us Alt</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="404.html" class="mobile-links__item-link">404</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="terms-and-conditions.html"
                                       class="mobile-links__item-link">Terms And Conditions</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="faq.html" class="mobile-links__item-link">FAQ</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="components.html" class="mobile-links__item-link">Components</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="typography.html" class="mobile-links__item-link">Typography</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a data-collapse-trigger class="mobile-links__item-link">Презервативы</a>
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
                                    <a href="" class="mobile-links__item-link">€ Euro</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">£ Pound Sterling</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">$ US Dollar</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">₽ Russian Ruble</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a data-collapse-trigger class="mobile-links__item-link">Полезное</a>
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
                                    <a href="" class="mobile-links__item-link">English</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">French</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">German</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Russian</a>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title">
                                    <a href="" class="mobile-links__item-link">Italian</a>
                                </div>
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