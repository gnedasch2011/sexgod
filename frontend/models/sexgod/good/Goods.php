<?php

namespace app\models\sexgod\good;

use Yii;

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
            [['id','prodID', 'aID', 'Barcode', 'VendorID', 'Stock', 'Novelties', 'SuperSale', 'Bestseller', 'Discount', 'img_status', 'ready_to_go', 'StopPromo'], 'integer'],
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
        $images[] = $this->photo_150;
        $images[] = $this->photo_1;
        $images[] = $this->photo_2;
        $images[] = $this->photo_3;
        $images[] = $this->photo_4;
        $images[] = $this->photo_5;

        $new_arr = array_diff($images, array(''));

        return $new_arr;
    }

    public function getPrice()
    {
        return $this->RetailPrice;
    }

    public function getDescription()
    {
        return $this->desc;
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
        return self::find()->where(['like', 'name', $params['name']])->all();
        $query = new \yii\db\Query();

        $query->select(['id'])
            ->from('goods');

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

        return $query->all();
    }

    public function getImagesone()
    {
        return $this->mainImg;
    }

    public function getParentCategoryUrl(): array
    {
        $GoodsCategory = $this->goodsCategory;
        return CategoryBase::getParentCategoryForBread($GoodsCategory);

    }

    public function getGoodsCategory()
    {
        return $this->hasOne(GoodsCategory::className(), ['goods_id' => 'id']);
    }

    public function getName()
    {
        return $this->ProdName;
    }
}
