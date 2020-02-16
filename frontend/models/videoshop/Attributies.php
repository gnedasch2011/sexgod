<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "attributies".
 *
 * @property int $id
 * @property string $name
 * @property string $title_short
 * @property int $attributies_type_id
 * @property string $name_for_filter
 * @property string $unit
 *
 * @property AttributiesType $attributiesType
 */
class Attributies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attributies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attributies_type_id'], 'required'],
            [['attributies_type_id'], 'integer'],
            [['name', 'title_short', 'name_for_filter', 'unit'], 'string'],
            [['attributies_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AttributiesType::className(), 'targetAttribute' => ['attributies_type_id' => 'id']],
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
            'title_short' => 'Title Short',
            'attributies_type_id' => 'Attributies Type ID',
            'name_for_filter' => 'Name For Filter',
            'unit' => 'Unit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributiesType()
    {
        return $this->hasOne(AttributiesType::className(), ['id' => 'attributies_type_id']);
    }

    /**
     * Возвращает id аттрибута, если найден или возвращает id новогосозданного
     * @param $name
     * @return int|mixed
     */
    static public function findAttrName($name)
    {
       $name = trim($name);
       $attr = self::find()
           ->where("name ='{$name}'")
           ->one() ;

       if(!$attr){
           $attribute = new self();
           $attribute->name = $name;
           $attribute->attributies_type_id = 3;
           $attribute->save();
       }
       return ($attr)? $attr->id: $attribute->id;

    }

}
