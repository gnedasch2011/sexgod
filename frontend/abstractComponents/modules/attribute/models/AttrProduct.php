<?php

namespace frontend\abstractComponents\modules\attribute\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "attr_product".
 *
 * @property int $id
 * @property string $attr_id
 * @property int $product_id
 * @property int $value
 */
class AttrProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attr_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attr_id'], 'required'],
            [['product_id', 'attr_id'], 'integer'],
            [['value'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attr_id' => 'Attr ID',
            'product_id' => 'Product ID',
            'value' => 'Value',
        ];
    }

    public function getMinValue($attrId)
    {
        return self::find()->where(['attr_id' => $attrId])->min() ?? 0;
    }

    public function getMaxValue($attrId)
    {
        return self::find()->where(['attr_id' => $attrId])->max() ?? 0;

    }


    public function getFullProps()
    {
        return $this->hasOne(\frontend\abstractComponents\modules\attribute\models\Attr::className(), ['id' => 'attr_id']);
    }


    public static function valueAttrProductInCat($idAttr, $idsCat, $value)
    {

        $res = self::find()
            ->leftJoin('goods_category gc', 'gc.aid = attr_product.product_id')
            ->where([self::tableName() . '.attr_id' => $idAttr])
            ->andWhere(['gc.category_id' => $idsCat]);

        if ($value == 'min') {
            $res->select('attr_product.value');

            return ($res->min('attr_product.value') == false) ? 0 : $res->min('attr_product.value');
        }

        if ($value == 'max') {
            $res->select('attr_product.value');
            return ($res->max('attr_product.value') == false) ? 0 : $res->min('attr_product.value');
        }

        if ($value == 'distinct') {

            $res->select("value as name, count('id') as countItems");
            $res->groupBy('value');

             return $res->asArray()->all();


        }


        return false;
    }


    public static function distinctValuesInCats($idAttr, $idsCat, $value)
    {


//
//        $res = self::find()
//            ->select('attr_product.value')
//            ->leftJoin('goods_category gc', 'gc.aid = attr_product.product_id')
//            ->where([self::tableName() . '.attr_id' => $idAttr])
//            ->andWhere(['gc.category_id' => $idsCat]);
//
//        if ($value == 'min') {
//            return ($res->min('attr_product.value') == false) ? 0 : $res->min('attr_product.value');
//        }
//
//        if ($value == 'max') {
//            return ($res->max('attr_product.value') == false) ? 0 : $res->min('attr_product.value');
//        }
//
//
//        return 0;
    }


}
