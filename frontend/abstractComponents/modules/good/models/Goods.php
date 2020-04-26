<?php

namespace frontend\abstractComponents\modules\good\models;


use app\models\sexgod\category\CategoryBase;
use frontend\abstractComponents\modules\brand\models\Brands;
use frontend\abstractComponents\modules\good\models\GoodsCategory;
use frontend\abstractComponents\helpers\CommonHelper;
use frontend\abstractComponents\models\CategoryAbstract;
use frontend\abstractComponents\widgets\filterCategory\models\AttrProduct;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "goods".
 *
 * @property int $prodID
 * @property int $aID
 * @property int $Barcode
 * @property string $ProdName
 * @property string $VendorCode
 * @property string $Vendor
 * @property int $VendorID
 * @property string $VendorCountry
 * @property string $ProdCountry
 * @property double $BaseRetailPrice
 * @property double $BaseWholePrice
 * @property int $Stock
 * @property string $ShippingDate
 * @property string $Description
 * @property string $Brutto
 * @property string $Batteries
 * @property string $Pack
 * @property string $Material
 * @property string $Lenght
 * @property string $Diameter
 * @property string $Collection
 * @property string $Images
 * @property string $Category
 * @property string $SubCategory
 * @property string $Color
 * @property string $Size
 * @property int $Novelties
 * @property int $SuperSale
 * @property int $Bestseller
 * @property double $RetailPrice
 * @property double $WholePrice
 * @property int $Discount
 * @property string $prodUrl
 * @property string $function
 * @property string $addfunction
 * @property string $vibration
 * @property string $volume
 * @property string $ModelYear
 * @property int $img_status
 * @property int $ready_to_go
 * @property int $StopPromo
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'frontend\abstractComponents\behaviors\Slug',
                'in_attribute' => 'ProdName',
                'out_attribute' => 'slug',
//                'translit' => true
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'prodID', 'aID', 'Barcode', 'VendorID', 'Stock', 'Novelties', 'SuperSale', 'Bestseller', 'Discount', 'img_status', 'ready_to_go', 'StopPromo'], 'integer'],
            [['aID'], 'required'],
            [['ProdName', 'VendorCode', 'Vendor', 'VendorCountry', 'ProdCountry', 'ShippingDate', 'Description', 'Brutto', 'Batteries', 'Pack', 'Material', 'Lenght', 'Diameter', 'Collection', 'Images', 'Category', 'SubCategory', 'Color', 'Size', 'prodUrl', 'function', 'addfunction', 'vibration', 'volume', 'ModelYear', 'slug'], 'string'],
            [['BaseRetailPrice', 'BaseWholePrice', 'RetailPrice', 'WholePrice'], 'number'],
            [['aID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prodID' => 'Prod ID',
            'aID' => 'A ID',
            'Barcode' => 'Barcode',
            'ProdName' => 'Prod Name',
            'VendorCode' => 'Vendor Code',
            'Vendor' => 'Vendor',
            'VendorID' => 'Vendor ID',
            'VendorCountry' => 'Vendor Country',
            'ProdCountry' => 'Prod Country',
            'BaseRetailPrice' => 'Base Retail Price',
            'BaseWholePrice' => 'Base Whole Price',
            'Stock' => 'Stock',
            'ShippingDate' => 'Shipping Date',
            'Description' => 'Description',
            'Brutto' => 'Brutto',
            'Batteries' => 'Batteries',
            'Pack' => 'Pack',
            'Material' => 'Material',
            'Lenght' => 'Lenght',
            'Diameter' => 'Diameter',
            'Collection' => 'Collection',
            'Images' => 'Images',
            'Category' => 'Category',
            'SubCategory' => 'Sub Category',
            'Color' => 'Color',
            'Size' => 'Size',
            'Novelties' => 'Novelties',
            'SuperSale' => 'Super Sale',
            'Bestseller' => 'Bestseller',
            'RetailPrice' => 'Retail Price',
            'WholePrice' => 'Whole Price',
            'Discount' => 'Discount',
            'prodUrl' => 'Prod Url',
            'function' => 'Function',
            'addfunction' => 'Addfunction',
            'vibration' => 'Vibration',
            'volume' => 'Volume',
            'ModelYear' => 'Model Year',
            'img_status' => 'Img Status',
            'ready_to_go' => 'Ready To Go',
            'StopPromo' => 'Stop Promo',
        ];
    }

    public function getMainImg()
    {
        $images = $this->images;

        if (isset($images[1])) {
            return $images[1];
        }

        return false;
    }

    public function getImages()
    {

        $new_arr = array_diff(explode(' ', $this->Images), array(''));

        return $new_arr;
    }

    public function getPrice()
    {
        return $this->RetailPrice;
    }

    public function getFormatPrice()
    {
        return CommonHelper::formatPrice($this->RetailPrice);
    }


    public function getDescription()
    {
        return $this->Description;
    }

    public function getPreviewImg()
    {
        return $this->images[0] ?? '';
    }

    public function getPriceForDetailCart()
    {
        return ($this->price) ? $this->price . ' руб.' : "Уточнить цену";
    }

    public function getRenderPrice()
    {
        if (is_numeric($this->price) && $this->price != '') {
            return $this->price . " &#8381;";
        } else {
            return 'Уточняйте у менеджера';
        }
    }

    public function getProductArrProduct($arr)
    {
        $product = [];

        if ($arr) {
            foreach ($arr as $id => $count) {
                $product[$count] = self::findOne($id);
            }
        }

        return $product;
    }


    public static function getQuery()
    {
        $query = new \yii\db\Query();

        $query->select(["id"])
            ->from('goods');

        return $query;
    }


    public static function getRandomProductsInCategory($params)
    {
        $query = self::getQuery();


    }

    public static function generateQueryFromParams($params)
    {
        $query = self::getQuery();

        //вернуть бестселлера из категории
        if (isset($params['Bestseller']) && $params['Bestseller']) {
            $query->andWhere(['goods.Bestseller' => 1]);
        }

        if (isset($params['Novelties']) && $params['Novelties']) {
            $query->andWhere(['goods.Novelties' => 1]);
        }

        if (isset($params['random']) && $params['random']) {


            if (isset($params['Discount_goods']) && $params['Discount_goods']) {
                //тут надо выбрать все ids товаров с самой большой скидкой


            }

            $randomBestsellers = self::getProductsTest([
                'query' => $query,
                'categoryId' => $params['categoryId'],
            ]);

            if ($randomBestsellers->one()) {
                $ids = ArrayHelper::getColumn($randomBestsellers->all(), 'id');
                $randomIds = self::returnRandomIds($ids, $params['limit']);
                $query->andWhere(['goods.id' => $randomIds]);
            }

            return self::generateModels($query);
        }


        if (isset($params['categoryId']) && $params['categoryId']) {
            $query->leftJoin('goods_category', 'goods_category.aID = goods.aID');
            $query->andWhere(['goods_category.category_id' => $params['categoryId']]);
        }


        if (isset($params['limit']) && $params['limit']) {
            $query->limit($params['limit']);
        }

        return self::generateModels($query);
    }

    public function getGoodsWithMaxDiscountInCategory($catId)
    {
        $ids = [];


        return $ids;
    }


    public static function getIdsFromCategory($dataIdCategory, $limit)
    {
        $GoodsCategorys = self::find()
            ->leftJoin('goods_category gc', 'gc.aID = goods.aID')
            ->andWhere(['gc.category_id' => $dataIdCategory])
            ->all();


        $ids = ArrayHelper::getColumn($GoodsCategorys, 'aID');

        $res = self::returnRandomIds($ids, $limit);

        return $res;
    }


    public static function returnRandomIds($ids, $limit)
    {
        $countItems = ($limit < count($ids)) ? $limit : count($ids);
        $res = [];

        for ($i = 0; $i < $countItems; $i++) {
            $rand = rand($i, count($ids) - 1);
            $res[] = $ids[$rand];
        }

        return $res;

    }

    public static function getProducts($params = [])
    {

        $query = (isset($params['query'])) ? $params['query'] : self::getQuery();

        if (isset($params['idOneGood']) && $params['idOneGood']) {
            $query->andWhere(['in', 'aID', $params['idOneGood']]);
        }

        if (isset($params['categoryId']) && $params['categoryId']) {
            $query->leftJoin('goods_category', 'goods_category.aID = goods.aID');
            $query->andWhere(['goods_category.category_id' => $params['categoryId']]);
        }

        if (isset($params['name']) && $params['name']) {
            $query->andWhere(['like', 'name', $params['name']]);
        }


        if (isset($params['limit']) && $params['limit']) {
            $query->limit($params['limit']);
        }

        if (isset($params['offset']) && $params['offset']) {
            $query->offset($params['offset']);
        }

        return self::generateModels($query);
    }


    /**
     * @param array $params
     * @return mixed|\yii\db\Query
     */
    public static function getProductsTest($params = [])
    {

        $query = (isset($params['query'])) ? $params['query'] : self::getQuery();

        if (isset($params['idOneGood']) && $params['idOneGood']) {
            $query->andWhere(['in', 'aID', $params['idOneGood']]);
        }

        if (isset($params['categoryId']) && $params['categoryId']) {
            $query->leftJoin('goods_category', 'goods_category.aID = goods.aID');
            $query->andWhere(['goods_category.category_id' => $params['categoryId']]);
        }

        if (isset($params['name']) && $params['name']) {
            $query->andWhere(['like', 'name', $params['name']]);
        }

        if (isset($params['limit']) && $params['limit']) {
            $query->limit($params['limit']);
        }

        if (isset($params['offset']) && $params['offset']) {
            $query->offset($params['offset']);
        }

        return $query;

    }


    public static function generateModels($query)
    {
        $result = [];

        if ($query->all()) {
            $ids = ArrayHelper::map($query->all(), 'id', 'id');

            foreach ($ids as $id) {
                $result [] = self::findOne(['aID' => $id]);
            }

        }

        return $result;
    }


    public function getGoodsCategory()
    {
        return $this->hasMany(GoodsCategory::className(), ['aid' => 'aID']);
    }

    public function getGoodsCategoryForBread()
    {
        return $this->hasOne(GoodsCategory::className(), ['aid' => 'id']);
    }

    public function getImagesone()
    {
        return $this->mainImg;
    }

    /**
     * Вернуть категории, где он находится
     * @return string
     */


    public function getDetailUrl()
    {
        return "/product/" . $this->slug . '/';
    }


    public function getParentCategoryUrl(): array
    {
        $GoodsCategory = $this->goodsCategoryForBread;
        $url = CategoryBase::getParentCategoryForBread($GoodsCategory);
        if (isset($url)) {
            return $url;
        }

        return false;
    }

    public function getName()
    {
        return $this->ProdName;
    }

    public function getAvailibilty()
    {
        if ($this->Stock) {
            return 'Есть в наличии';
        }

        return 'Нет в наличии';
    }


    public function getGenerateAttr()
    {
        return 'Аттрибуты';
    }

    public function getAttrProduct()
    {

        $exception = [4, 6, 11, 12, 13, 16, 17, 8, 9];

        return $this->hasMany(AttrProduct::className(), ['product_id' => 'aID'])
            ->where(['not in', 'attr_product.attr_id', $exception]);
    }

    public function getAttrProductForCat()
    {

        $idsAtt = [26, 25, 32, 5];

        return $this->hasMany(AttrProduct::className(), ['product_id' => 'aID'])
            ->where(['in', 'attr_product.attr_id', $idsAtt]);
    }

    public function getProductStatus()
    {
        return 'Новинка';
    }


    public function getUrlOnBrandInGood()
    {
        $brandLink = $this->brand;

        return '/brand/' . $brandLink->url . '/';
    }

    public function getBrand()
    {
        return $this->hasOne(Brands::className(), ['name' => 'Vendor']);

    }

}
