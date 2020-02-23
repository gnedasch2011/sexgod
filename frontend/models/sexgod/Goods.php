<?php

namespace app\models\sexgod;

use app\models\ImageUrl;
use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string $categoryParent
 * @property string $categoryId
 * @property string $name
 * @property string $desc
 * @property string $manufactury
 * @property int $manufacturer_part_number
 * @property int $price_retail
 * @property int $price_wholesale
 * @property int $sale_access
 * @property int $in_stock
 * @property int $shipment_time
 * @property string $the_size
 * @property int $color
 * @property string $aID
 * @property string $material
 * @property string $batteries
 * @property string $packaging
 * @property string $gross_weight
 * @property string $photo_1
 * @property string $photo_2
 * @property string $photo_3
 * @property string $photo_4
 * @property string $photo_5
 * @property string $articleId
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc', 'slug'], 'string'],
            [['manufacturer_part_number', 'barcode', 'price_retail', 'price_wholesale', 'sale_access', 'in_stock', 'shipment_time', 'color', 'article'], 'integer'],
            [['categoryParent', 'categoryId', 'manufactury', 'the_size', 'aID', 'material', 'batteries', 'packaging', 'gross_weight', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'articleId'], 'string', 'photo_150', 'max' => 450],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article' => 'article',
            'categoryParent' => 'Category Parent',
            'categoryId' => 'Category ID',
            'name' => 'Name',
            'desc' => 'Desc',
            'manufactury' => 'Manufactury',
            'manufacturer_part_number' => 'Manufacturer Part Number',
            'price_retail' => 'Price Retail',
            'price_wholesale' => 'Price Wholesale',
            'sale_access' => 'Sale Access',
            'in_stock' => 'In Stock',
            'shipment_time' => 'Shipment Time',
            'the_size' => 'The Size',
            'color' => 'Color',
            'aID' => 'A ID',
            'material' => 'Material',
            'batteries' => 'Batteries',
            'packaging' => 'Packaging',
            'gross_weight' => 'Gross Weight',
            'photo_1' => 'Photo 1',
            'photo_2' => 'Photo 2',
            'photo_3' => 'Photo 3',
            'photo_4' => 'Photo 4',
            'photo_5' => 'Photo 5',
            'barcode' => 'barcode',
            'slug' => 'slug',
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
        return $this->price_retail;
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
}
