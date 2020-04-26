<?php


namespace frontend\abstractComponents\modules\cart\components;


use frontend\abstractComponents\modules\good\models\Goods;
use frontend\abstractComponents\helpers\CommonHelper;
use Yii;
use yii\base\Component;

class Cart extends Component
{
    public $cart;

    public function checkGoodsInCart($idGood)
    {
        return $this->checkGoodInCartArray($idGood);
    }


    public function sessionInit()
    {
        $session = Yii::$app->session;

        if (!$session->isActive) {
            $session->open();
        }

        return $session;
    }


    public function __construct()
    {
        $session = $this->sessionInit();
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

    public function getIdsProductsInCart()
    {
        if ($this->cart) {
            unset($this->cart[null]);
        }

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


    public function getFullPriceOneGood($goodId)
    {
        $countGood = $this->cart[$goodId];

        $total = $countGood * Goods::findOne($goodId)->price;

        return $total;
    }


    public function returnFormatFullPrice()
    {
        return CommonHelper::formatPrice($this->returnCartFullPrice());
    }

    public function countById($id)
    {
        return $this->cart[$id] ?? 0;
    }

    public function getCountItems()
    {
        $count = 0;
        foreach ($this->cart as $item) {
            $count += $item;
        }
        return $count;
    }

    public function checkGoodInCartArray($itemId)
    {
        if (in_array($itemId, $this->getIdsProductsInCart())) {
            return true;
        }

        return false;

    }

    public function clear()
    {
        $session = self::sessionInit();

        if ($session->remove('cart')) {
            return true;
        }
        return true;

    }

    public function addInSessionCart()
    {
        $session = $this->sessionInit();

        $dataForCart = $this->getDataFromPost();

        if (empty($this->cart)) {
            $session['cart'] = [
                $dataForCart['id'] => $dataForCart['count']
            ];
        }

        if (!empty($this->cart)) {
            $this->cart[$dataForCart['id']] = $dataForCart['count'];
            $session->set('cart', $this->cart);
        }

        return true;
    }

    public function getDataFromPost()
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


    public function returnProductModelsInCart()
    {
        $products = [];

        if (isset($this->cart)) {
            foreach ($this->cart as $id => $count) {
                $prod = Goods::getProducts([
                    'idOneGood' => [$id]
                ]);
                $products[] = $prod[0];
            }

            return $products;
        }

        return false;
    }

    public function getArrProducts()
    {
        if (isset($this->cart)) {
            return json_encode($this->cart);
        }

        return '';

    }


}