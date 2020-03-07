<?php

namespace app\modelsapp\models\sexgod;

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
class Goods2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prodID', 'aID', 'Barcode', 'VendorID', 'Stock', 'Novelties', 'SuperSale', 'Bestseller', 'Discount', 'img_status', 'ready_to_go', 'StopPromo'], 'integer'],
            [['aID'], 'required'],
            [['ProdName', 'VendorCode', 'Vendor', 'VendorCountry', 'ProdCountry', 'ShippingDate', 'Description', 'Brutto', 'Batteries', 'Pack', 'Material', 'Lenght', 'Diameter', 'Collection', 'Images', 'Category', 'SubCategory', 'Color', 'Size', 'prodUrl', 'function', 'addfunction', 'vibration', 'volume', 'ModelYear'], 'string'],
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
}
