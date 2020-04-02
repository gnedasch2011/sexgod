<?php

namespace app\models\sexgod\good;

use app\models\sexgod\category\CategoryBase;
use app\models\sexgod\good\GoodsCategory;
use frontend\abstractComponents\helpers\CommonHelper;
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
        return CommonHelper::formatPrice($this->RetailPrice) . ' руб.';
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


    public static function getProducts($params = [])
    {
        $query = new \yii\db\Query();

        $query->select(["id"])
            ->from('goods');


        if ($params['idOneGood']) {
            $query->where(['in', 'aID', $params['idOneGood']]);
        }

        if ($params['name']) {
            $query->where(['like', 'name', $params['name']]);
        }

        if ($params['popular']) {
            $query->select(['*'])
                ->from('goods');
            $ids = [
                740,
                741,
                742,
                743,
                744,
                745,
                746,
                747
            ];

            return self::find()->where(['id' => $ids])->limit(8)->all();
        }


        $result = [];

        if ($query->all()) {
            $ids = ArrayHelper::map($query->all(), 'id', 'id');
            foreach ($ids as $id) {
                $result [] = self::findOne(['aID' => $id]);
            }

            return $result;
        }


        return false;
    }


    public function getImagesone()
    {
        return $this->mainImg;
    }


    public function getDetailUrl()
    {
        return "/product/" . $this->slug;
    }


    public function getParentCategoryUrl(): array
    {
        $GoodsCategory = $this->goodsCategory;

        return CategoryBase::getParentCategoryForBread($GoodsCategory);

    }

    public function getGoodsCategory()
    {
        return $this->hasOne(GoodsCategory::className(), ['aid' => 'id']);
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
}
