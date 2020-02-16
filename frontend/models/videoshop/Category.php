<?php

namespace app\models\shop;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $preview_text
 * @property string $translate_name
 * @property string $parent_category
 *
 * @property CategoryHasAttributies[] $categoryHasAttributies
 * @property Goods[] $goods
 */
class Category extends \yii\db\ActiveRecord
{

    const PARENT_CATEGORY = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
                'slugAttribute' => 'translate_name',
                'attribute' => 'name',
                // optional params
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false,
                // If intl extension is enabled, see http://userguide.icu-project.org/transforms/general.
                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'description', 'preview_text', 'translate_name'], 'string'],
            ['parent_category', 'number']
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
            'translate_name' => 'Translate Name',
            'parent_category' => 'Parent Category',
        ];
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

        $resultArr = ArrayHelper::map($listCateg, 'translate_name', 'parent_category', 'id');
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
        return $categoryId->parent_category ?? 0;
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

        $resultArr = ArrayHelper::map($listCateg, 'translate_name', 'parent_category', 'id');
        $currentIDCategoryArr [] = $currentIDCategory;
        $arrIdCategoryAll = self::recursiveLevelDownCategory($currentIDCategoryArr, $resultArr);
        $arrIdCategoryAllArr = explode(',', $arrIdCategoryAll);

        $allGoods = Goods::find()
            ->join('left join', 'goods_has_category ghc', 'ghc.goods_id = goods.id')
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
            ->where(['parent_category'=>$currentIDCategory])
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


    static public function      getAllCategoryForMenu()
    {
        $listCateg = self::find()
            ->distinct()
            ->orderBy('name')
            ->where(['parent_category'=>self::PARENT_CATEGORY])
            ->all();
        $arr = ArrayHelper::map($listCateg, 'translate_name', 'name');

        return $arr;
    }




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

    public static function getActiveMenuItems()
    {
        $itemMenu = self::find()
            ->where(['parent_category' => 0])
            ->all();

        return $itemMenu;
    }


    public function getSubMenu()
    {
        return $this->hasMany(Category::className(), ['parent_category' => 'id']);
    }


}
