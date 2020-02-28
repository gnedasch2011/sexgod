<?php


namespace frontend\abstractComponents\widgets\filterCategory\models;


use yii\base\Model;
use frontend\abstractComponents\widgets\filterCategory\models\Attr;
use frontend\abstractComponents\widgets\filterCategory\models\AttrCategory;
use frontend\abstractComponents\widgets\filterCategory\models\AttrGroup;
use frontend\abstractComponents\widgets\filterCategory\models\AttrProduct;
use yii\helpers\ArrayHelper;

class AttributeMain extends Model
{
    public static function getIdAttributeInCategory($idCat)
    {
        return AttrCategory::find()->where(['category_id' => $idCat])->all();
    }

    /**
     * @param $idCat
     * @return array
     */
    public static function getAttributesForFilter($idCat)
    {
        $AttributesForFilter =
            AttrProduct::find()
                ->distinct('attr_id')
                ->leftJoin('attr sa', 'attr_product.attr_id = sa.id')
                ->leftJoin('attr_group sag', 'sag.id = sa.group_id')
                ->leftJoin('goods_category sgc', 'sgc.goods_id = attr_product.product_id')
                ->where(['sgc.category_id' => $idCat])
                ->orderBy('')
                ->all();

        if ($AttributesForFilter) {
            return ArrayHelper::getColumn($AttributesForFilter, 'attr_id');
        }

        return [];

    }


    public static function getAttributesModel($idsAttr)
    {
        foreach ($idsAttr as $attr) {
            $attributesModels[] = Attr::findOne($attr);
        }

        return $attributesModels;
    }

}