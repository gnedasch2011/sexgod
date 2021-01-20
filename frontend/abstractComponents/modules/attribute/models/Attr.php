<?php

namespace frontend\abstractComponents\modules\attribute\models;

use frontend\abstractComponents\models\CategoryAbstract;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "attr".
 *
 * @property int $id
 * @property string $name
 * @property int $group_id
 */
class Attr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['group_id'], 'integer'],
            [['filter_opened'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['unit'], 'string'],
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
            'group_id' => 'Group ID',
            'unit' => 'Ед. измерения',
            'filter_opened' => 'Ед. измерения',
        ];
    }

    public function getGroup()
    {
        return $this->hasOne(AttrGroup::className(), ['id' => 'group_id']);
    }

    /**
     * @param $idCat нужны так же внутренние
     * @param $value min/max
     * @return int|mixed
     */
    public function getValueInAttrProduct($idCat, $value)
    {
        return AttrProduct::minValueAttrProductInCat($this->id, $idCat, $value);
    }


    /**
     * @param $idCat нужны так же внутренние
     * @param $value min/max
     * @return int|mixed
     */
    public function getValueInAttrProductAndInChildCat($idCat, $value)
    {

        $idsCategory = CategoryAbstract::findOne(['id' => $idCat]);
        $idsChildCat = ArrayHelper::getColumn($idsCategory->idsChildsCurrentCategory, 'id');

        $idsChildCat[] = $idsCategory->id;
        $res = [];

        if ($res = AttrProduct::valueAttrProductInCat($this->id, $idsChildCat, $value)) {
            return $res;
        }

        return $res;
    }


    public function getCssFilterOpened()
    {
        if ($this->filter_opened) {
            return ' filter--opened';
        }
        return '';
    }

    public function getLinkWithFilter($value)
    {
        if (isset($value)) {
            $link = "/catalog/seks-igrushki/?attr[{$this->id}]={$value}";

            return $link;
        }

        return '#';
    }
}
