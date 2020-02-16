<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\sexgod\Goods;

class Cart extends Model
{
    public $cart;

    public function __construct()
    {
        $session = Cart::sessionInit();
        $cart = isset($session['cart']) ? $_SESSION['cart'] : [];
        $this->cart = $cart;
    }

    public static function geInitAjaxData()
    {
        $request = Yii::$app->request;

        if ($request->isAjax) {
            if ($request->post('dataItem')) {
                $dataItem = json_decode($request->post('dataItem'));
                $dataItem = (array)$dataItem;
                return $dataItem;
            }
        }
        return [];
    }

    public static function sessionInit()
    {
        $session = Yii::$app->session;

        if (!$session->isActive) {
            $session->open();
        }
        return $session;
    }

    public function getIdsProductsInCart()
    {
        return array_keys($this->cart);
    }

    public function getProductForCart()
    {
        return Goods::find()->where(['id' => $this->getIdsProductsInCart()])->all();

    }

    public function returnCartFullPrice()
    {
        $fullPrice = 0;
        foreach ($this->cart as $itemId => $itemCount) {
            if ($priceItem = Goods::findOne($itemId)->price) {
                $fullPrice += $priceItem * $itemCount;
            }

            continue;
        }

        return $fullPrice;
    }

    public function returnFormatFullPrice()
    {
        return number_format($this->returnCartFullPrice(), 0, '', ' ');
    }

    public function countById($id)
    {
        return $this->cart[$id] ?? false;
    }

    public function returnFullCountItems()
    {
        $count = 0;
        foreach ($this->cart as $item) {
            $count += $item;
        }
        return $count;
    }
}