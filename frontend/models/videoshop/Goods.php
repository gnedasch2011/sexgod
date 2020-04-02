<?php

namespace app\models\sexgod;

use app\models\FilesGoods;
use app\models\ImageUrl;
use Yii;
use yii\helpers\ArrayHelper;
use Zelenin\yii\behaviors\Slug;
use app\models\behaviors\MyBehavior;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $preview_text
 * @property int $category_id
 *
 * @property Category $category
 * @property RatingProduct[] $ratingProducts
 */
class Goods extends \yii\db\ActiveRecord
{

    const PATH_IMG = "/images/products/";
    const PATH_FILES = "/files/products/";

//    public function behaviors()
//    {
//        return [
//            'slug' => [
//                'class' => 'Zelenin\yii\behaviors\Slug',
//                'slugAttribute' => 'slug',
//                'attribute' => 'name',
//                // optional params
//                'ensureUnique' => true,
//                'replacement' => '-',
//                'lowercase' => true,
//                'immutable' => false,
//                // If intl extension is enabled, see http://userguide.icu-project.org/transforms/general.
//                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
//            ]
//        ];
//    }

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
            ['name', 'unique'],
            [['name', 'slug'], 'string'],
            [['slug', 'url_for_parser'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'preview_text' => 'Preview Text',
            'url_for_parser' => 'url_for_parser',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatingProducts()
    {
        return $this->hasMany(RatingProduct::className(), ['goods_id' => 'id']);
    }


    public function getCategory()
    {
        return $this->hasMany(Category::className(), ['id' => 'category_id'])
            ->viaTable('goods_has_category', ['goods_id' => 'id']);
    }

    public function getAttributies()
    {
        return $this->hasMany(Attributies::className(), ['id' => 'attributies_id'])
            ->viaTable('goods_has_attributies', ['goods_id' => 'id']);
    }

    public function getAttrValue($id)
    {
        return GoodsHasAttributies::find()->where(['goods_id'=>$this->id, 'attributies_id'=>$id])->one()->value;

    }

    public function getImagesone()
    {
        return $this->hasOne(ImageUrl::className(), ['good_id' => 'id']);
    }

    public function getMainImg()
    {
        return self::PATH_IMG . $this->imagesone->hash_path;
    }

    public function getImages()
    {
        return $this->hasMany(ImageUrl::className(), ['good_id' => 'id']);
    }

    public function getListImagesWithoutMain()
    {
        $imgArray = ArrayHelper::getColumn($this->images, 'hash_path');
        unset($imgArray[0]);

        $imgArray = array_map(function ($img) {
            return self::PATH_IMG . $img;
        }, $imgArray);

        return $imgArray;
    }

    public function getPrice()
    {
        $price = (new \yii\db\Query())
            ->select(['value'])
            ->from(self::tableName())
            ->leftJoin('goods_has_attributies gha', 'gha.goods_id=' . $this->id)
            ->where(['gha.attributies_id' => 2035])
            ->one();
        return ($price['value']) ? $price['value'] : false;
    }

    public function getRenderPrice()
    {
        if (is_numeric($this->price) && $this->price != '') {
            return $this->price . " &#8381;";
        } else {
            return 'Уточняйте у менеджера';
        }
    }

    public function getPriceForDetailCart()
    {
        return ($this->price) ? $this->price . ' руб.' : "Уточнить цену";
    }

    public function getFiles()
    {
        return $this->hasMany(FilesGoods::className(), ['good_id' => 'id']);
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

//    public static function getProducts($params = [])
//    {
//        $query = new \yii\db\Query();
//        $query->select(['id'])
//            ->from('goods');
//
//        if ($params['name']) {
//            $query->where(['like', 'name', $params['name']]);
//        }
//
//        if ($params['popular']) {
//            $query->select(['*'])
//                ->from('goods');
//            $ids = [
//                740,
//                741,
//                742,
//                743,
//                744,
//                745,
//                746,
//                747
//            ];
//
//            return self::find()->where(['id' => $ids])->limit(8)->all();
//        }
//
//
//        $products = $query->all();
//
//        $ids = ArrayHelper::map($products, 'id', 'id');
//
//        return self::find()
//            ->where(['id' => $ids])
//            ->all();
//    }



}
