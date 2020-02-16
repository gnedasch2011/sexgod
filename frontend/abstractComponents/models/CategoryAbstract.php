<?php


namespace frontend\abstractComponents\models;


use app\models\sexgod\Goods;
use app\models\shop\Category;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class CategoryAbstract extends ActiveRecord
{

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

    static public function getAllCategoryForMenu()
    {
        $listCateg = self::find()
            ->distinct()
            ->orderBy('name')
            ->where(['parent_id' => self::parent_id])
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
            ->join('left join', 'goods_category ghc', 'ghc.goods_id = goods.id')
            ->join('left join', 'category c', 'c.id = ghc.category_id')
            ->where(['c.id' => $arrIdCategoryAllArr])
            ->all();

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


//    static public function      getAllCategoryForMenu()
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
}


