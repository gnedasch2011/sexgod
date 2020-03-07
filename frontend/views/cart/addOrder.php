<table class="addOrder">
    <tr>
        <td>№</td>
        <td>Наименование</td>
        <td>Цена</td>
        <td>Кол-во</td>
    </tr>
    <?php
    $number = 1;
    foreach($idCountPrices as $id=>$count):?>
        <tr>
            <td><?= $number++ ;?>.</td>
            <td><?= \app\models\sexgod\good\Goods::findOne($id)->name ;?></td>
            <td><?= \app\models\sexgod\good\Goods::findOne($id)->price  ;?> руб.</td>
            <td><?= $count ;?></td>
        </tr>
      <?php endforeach;?>
    <tr>
        <td colspan="2" class="text-center">ИТОГО:</td>
        <td><?= $cart->returnFormatFullPrice() ;?> руб.</td>
        <td><?= $cart->returnFullCountItems() ;?></td>
    </tr>
</table>


 <div class="row dateForDelivery">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3>ДАННЫЕ ДЛЯ ДОСТАВКИ</h3>
          <p class="addAttr-p">Контактный телефон</p>
          <p><?= $order->phone ;?></p>
          <div>
              <p class="addAttr-p">Адрес доставки
              </p>
              <p><?= $order->adress ;?></p>
          </div>


          <?php if($order->paymentMethod!=0):?>
              <div>
                  <p class="addAttr-p">Способ оплаты
                  </p>
                  <p><?= $order->paymentMethod ;?></p>
              </div>
            <?php endif;?>
       </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="orderHr"></div>
          <p>Добавлен: <?= $order->dateCreate ;?></p>
       </div>


  </div>