<?php


namespace frontend\abstractComponents\models;


use app\models\sexgod\good\Goods;
use app\models\sexgod\good\GoodsCategory;
use app\models\shop\Category;
use app\modelsapp\models\sexgod\good\Goods2;
use app\modules\product\models\ProductCategory;
use frontend\abstractComponents\modules\images\models\ImgItems;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class CategoryAbstract extends ActiveRecord
{

    const ITEMS_TYPE = 1;
    const ROOT_PATH_FOR_CAT = '/catalog/';

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'frontend\abstractComponents\behaviors\Slug',
                'in_attribute' => 'name',
                'out_attribute' => 'slug',
//                'translit' => true
            ]
        ];
    }


    const parent_id = 0;

    public static function tableName()
    {
        return '{{%category}}';
    }

    public function rules()
    {
        return [
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'slug' => 'slug',
        ];
    }

    public static function getAllCategoryForMenu()
    {

        $listCateg = self::find()
            ->distinct()
            ->orderBy('name')
            ->where(['parent_id' => self::parent_id])
            ->all();

        $arr = ArrayHelper::map($listCateg, 'slug', 'name');

        return $arr;
    }


    public function getChildsCurrentCategory()
    {

        $listCateg = self::find()
            ->distinct()
            ->orderBy('name')
            ->where(['parent_id' => $this->id])
            ->all();

        $arr = ArrayHelper::map($listCateg, 'slug', 'name');

        return $arr;
    }

    public static function getActiveMenuItems()
    {
        $itemMenu = self::find()
            ->where(['parent_id' => 0])
            ->all();

        return $itemMenu;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryHasAttributies()
    {
        return $this->hasMany(CategoryHasAttributies::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['id' => 'goods_id'])
            ->viaTable('goods_has_category', ['category_id' => 'id']);
    }

    /**
     * @param $id
     * @param $resultArr
     * @return string
     */
    public function recursiveLevel($id, $resultArr, $urlArr, $count = 0)
    {
        $count++;

        if (array_values($resultArr[$id])[0] != 0 and $count < 10) {
            $urlArr[] = array_keys($resultArr[$id])[0];
            return $this->recursiveLevel(array_values($resultArr[$id])[0], $resultArr, $urlArr, $count);
        } else {
            $urlArr[] = array_keys($resultArr[$id])[0];
            return $urlArr;
        }

    }

    /**
     * Получение полного пути
     * @return string
     */
    public function getFullPathParent()
    {
        $listCateg = static::find()->all();

        $resultArr = ArrayHelper::map($listCateg, 'translate_name', 'parent_id', 'id');
        $idCurrentCategory = $this->id;

        $fullPath = $this->recursiveLevel($idCurrentCategory, $resultArr, $url = '');

        return implode('/', array_reverse($fullPath));
    }


    /**
     * Возвращаем текущий id общего родителя
     * @param $translate_name
     * @return int|mixed
     */
    public static function getIdByPID($translate_name)
    {
        $categoryId = static::find()->where(['translate_name' => $translate_name])->one();
        return $categoryId->parent_id ?? 0;
    }


    /**
     * Возвращаем текущий id категории
     * @param $translate_name
     * @return int|mixed
     */
    public static function getIdByTranslateName($translate_name)
    {
        $categoryId = static::find()->where(['translate_name' => $translate_name])->one();
        return $categoryId->id ?? 0;
    }


    /**
     *  Собрать Id нижележащих категорий
     * @param array $arrIdForLoop
     * @param array $resultArr
     * @param int $count
     * @return string
     */
    public static function recursiveLevelDownCategory(array $arrIdForLoop, array $resultArr, int $count = 0): string
    {

        if ($count == 0) {
            $arrIdForLoop[] = array_values($arrIdForLoop)[0];
        }

        if ($count <= 10) {
            foreach ($arrIdForLoop as $id) {

                foreach ($resultArr as $key => $category) {
                    if (array_values($category)[0] == $id) {
                        $arrIdForLoop[] = $key;
                    }
                }

                if (isset($resultArr[$id])) {
                    unset($resultArr[$id]);
                }

            }
            $count++;
            return self::recursiveLevelDownCategory(array_unique($arrIdForLoop), $resultArr, $count);
        } else {
            $arrFinal = implode(',', array_unique($arrIdForLoop));
            return $arrFinal;
        }


    }

    /**
     *  Вернуть id всех товаров нижележащих категорий
     * @param $currentIDCategory
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getAllGoods($currentIDCategory)
    {
        $listCateg = static::find()->all();
        $resultArr = ArrayHelper::map($listCateg, 'slug', 'parent_id', 'id');
        $currentIDCategoryArr [] = $currentIDCategory;
        $arrIdCategoryAll = self::recursiveLevelDownCategory($currentIDCategoryArr, $resultArr);
        $arrIdCategoryAllArr = explode(',', $arrIdCategoryAll);

        $allGoods = Goods::find()
            ->join('left join', 'goods_category ghc', 'ghc.aid = goods.aID')
//            ->join('left join', 'category c', 'c.id = ghc.category_id')
            ->where(['ghc.category_id' => $arrIdCategoryAllArr])
//            ->limit(100)
//            ->all()

        ;

        return $allGoods;
    }


    /**
     *  Вернуть id всех нижележащих категорий
     * @param $currentIDCategory
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getAllCategoryInCurrent($currentIDCategory)
    {

        $categorys = self::find()
            ->where(['parent_id' => $currentIDCategory])
            ->all();

        $categorysIds = ArrayHelper::getColumn($categorys, 'id');

        return $categorys;
    }

    static public function getAllCategoryName()
    {
        $listCateg = self::find()
            ->distinct()
            ->orderBy('name')
            ->all();

        $arr = ArrayHelper::map($listCateg, 'id', 'name');
        $arr[0] = 'Базовый';

        return $arr;
    }


//    static public function   getAllCategoryForMenu()
//    {
//        $listCateg = self::find()
//            ->distinct()
//            ->orderBy('name')
//            ->where(['parent_id'=>self::parent_id])
//            ->all();
//        $arr = ArrayHelper::map($listCateg, 'translate_name', 'name');
//
//        return $arr;
//    }
//


    /**
     * Возвращает id, если имя такое есть
     * @param $name
     * @return int
     */
    public static function findNameCategory($name)
    {
        $name = trim($name);
        $category = self::find()
            ->where("name ='{$name}'")
            ->one();

        return $category->id ?? false;
    }

//    public static function getActiveMenuItems()
//    {
//        $itemMenu = self::find()
//            ->where(['parent_id' => 0])
//            ->all();
//
//        return $itemMenu;
//    }


    public function getSubMenu()
    {
        return $this->hasMany(self::className(), ['parent_id' => 'id']);
    }

    public function getIdBySlug($slug)
    {
        $cat = self::find()->where(['slug' => $slug])->one();

        if ($cat) {
            return $cat->id;
        } else {
            return false;
        }
    }

    /**
     * @return bool|CategoryAbstract|null
     */
    public function getParentCategory()
    {
        $parentCat = self::findOne(['id' => $this->parent_id]);

        if (isset($parentCat) && $parentCat->id == 0) {
            return false;
        }
        return $parentCat;

    }

    public function getFullUrl()
    {
        $fullUrl = self::ROOT_PATH_FOR_CAT . $this->slug . '/';
        return $fullUrl;
    }

    public static function getParentCategoryForBread($GoodsCategory)
    {
        $arr = [];

        if (isset($GoodsCategory->category_id)) {
            $cat = self::find()->where(['id' => $GoodsCategory->category_id])->one();
            $catForBread = self::getRecursiveParentCat($cat);

            $arr = [
                'label' => $catForBread->name,
                'url' => [$catForBread->fullUrl]
            ];


            return $arr;
        }

        return $arr;
    }

    public static function getRecursiveParentCat($cat)
    {
        if (isset($cat->parent_id) && $cat->parent_id != 0) {
            $cat = self::find()->where(['id' => $cat->parent_id])->one();
            self::getRecursiveParentCat($cat);
        }

        return $cat;
    }

//    public function getCountItems()
//    {
//
//        echo "<pre>";
//        print_r($this);
//        die();
//    }

    public function getCountItems()
    {
        $idsSubCat = ArrayHelper::getColumn($this->subMenu, 'id');
        $idsSubCat[] = $this->id;
        return GoodsCategory::find()->where(['category_id' => $idsSubCat])->count();
    }

    /**
     * Мин. цена в категории
     * @return array|false|int
     * @throws \yii\db\Exception
     */
    public function getMinPriceInCategory()
    {

        $query = GoodsCategory::find()
            ->leftJoin('new_product_variant npv', 'npv.productId = product_category.productId')
            ->leftJoin('goods g', 'g.id = product_category.productId')
            ->where(['categoryId' => $this->ids])
            ->andWhere(['published' => 1])
            ->min('price');

        //        echo "<pre>"; print_r($query);die();
        //        echo "<pre>"; print_r($query->createCommand()->getRawSql());die();

        return (isset($query)) ? $query : 0;
    }

    /**
     * Макс. цена в категории
     * @return array|false|int
     * @throws \yii\db\Exception
     */
    public function getMaxPriceInCategory()
    {
        $query = GoodsCategory::find()
            ->leftJoin('new_product_variant npv', 'npv.productId = product_category.productId')
            ->leftJoin('goods g', 'g.id = product_category.productId')
            ->where(['categoryId' => $this->ids])
            ->andWhere(['published' => 1])
            ->max('price');


        return (isset($query)) ? $query : 0;
    }

    public function getTitle()
    {
        echo "<pre>";
        print_r($this);
        die();
    }

    /**
     * @param $idCat
     * @return mixed|string
     */
    public static function getNameById($idCat)
    {
        $cat = self::findOne(['id' => $idCat]);

        if ($cat) {
            return $cat->name;
        }

        return '';
    }

    public static function getLinkById($idCat)
    {
        $cat = self::findOne(['id' => $idCat]);

        if ($cat) {
            return self::ROOT_PATH_FOR_CAT . $cat->slug;
        }

        return '';
    }


    /**
     * @return array
     */
    public static function getRandomBestsellers($idCat, $countItems = 4): array
    {

        $curCat = self::findOne($idCat);
        $GoodsCategorys = $curCat->getGoodsCategory()
            ->leftJoin('goods', 'goods_category.aID = goods.aID')
            ->andWhere(['goods.Bestseller' => 1])
            ->all();
        $ids = ArrayHelper::getColumn($GoodsCategorys, 'aid');
        $res = [];

        $countItems = ($countItems < count($ids)) ? $countItems : count($ids);

        for ($i = 0; $i < $countItems; $i++) {
            $rand = rand($i, count($ids) - 1);
            $res[] = $ids[$rand];
        }

        return $res;


    }

    public static function generateQueryFromParams($params)
    {
        $query = self::getQuery();

    }

    /**
     * @return array
     */
    public static function getNewGoods($idCat, $countItems = 4): array
    {

        $curCat = self::findOne($idCat);
        $GoodsCategorys = $curCat->getGoodsCategory()
            ->leftJoin('goods', 'goods_category.aID = goods.aID')
            ->andWhere(['goods.Novelties' => 1])
            ->all();
        $ids = ArrayHelper::getColumn($GoodsCategorys, 'aid');
        $res = [];

        $countItems = ($countItems < count($ids)) ? $countItems : count($ids);

        for ($i = 0; $i < $countItems; $i++) {
            $rand = rand($i, count($ids) - 1);
            $res[] = $ids[$rand];
        }

        return $res;

    }


    public function getGoodsCategory()
    {
        return $this->hasMany(GoodsCategory::className(), ['category_id' => 'id']);

    }

    public static function getCategoryById($ids)
    {

        if ($ids) {
            return self::find()
                ->with('imgItems')
                ->andWhere(['id' => $ids])
                ->all();
        }

    }

    public function getPreviewForBlockMainPage()
    {
        if ($this->id == 484) {
            if (empty($this->imgItems)) {

                echo "<pre>"; print_r($this);die();
            }

        }
        return $this->imgItems;
    }


    public function getImgItems()
    {
        return $this->hasOne(ImgItems::className(), ['items_id' => 'id'])
            ->where(['or', ['items_id' => 'id'], ['items_type' => self::ITEMS_TYPE]]);
    }

    public function getDetailUrl()
    {
        return '/catalog/' . $this->slug . '/';
    }


    public function getPreviewImg()
    {

        return '';
    }
}


