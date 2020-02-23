<div class="header_cart text-center">
    <a href="/cart">
        <div class="">
            <span class="text_cart">Ваша корзина</span>
            <i class="fa fa-angle-down"></i>
        </div>
        <div>
            <span>Кол-во (<?= $cart->returnFullCountItems(); ?>) — <?= $fullPrice; ?> руб.</span>
        </div>
    </a>
    <div class="cart-detail">
        <?php foreach ($goods as $good): ?>
            <a href="/product/<?= $good->slug; ?>" class="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 goodInCart fbc">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <img src="<?= $good->mainImg; ?>" alt="" class="" width="50px">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h3 class="goodInCart_h3"><?= $good->name; ?></h3>
                        <span><?= $cart->countById($good->id); ?> x <?= $good->priceForDetailCart; ?> </span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart__body_full_price">
            <p>Итого: <span class="cart_fullPrice_text"><?= $fullPrice; ?> руб.</span></p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart_group_button">
            <a href="/cart" class="buttonFindProduct buttonInCart addItemInCart">Оформить</a>
            <a class="buttonFindProduct jsClearCart">Очистить</a>
        </div>

    </div>
</div>