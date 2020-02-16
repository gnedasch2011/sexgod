<?php


namespace frontend\abstractComponents\behaviors;


use yii\base\Behavior;
use yii\db\ActiveRecord;

class Slug extends Behavior
{
    public $slug;
    public $in_attribute;
    public $out_attribute;

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_UPDATE => 'getSlug',
            ActiveRecord::EVENT_BEFORE_INSERT => 'getSlug'
        ];
    }


    public function getSlug()
    {
        if (empty($this->owner->slug)) {
            $translit = "Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();";
            $string = transliterator_transliterate($translit, $this->owner->name);
            $string = preg_replace('/[-\s]+/', '-', $string);
            $this->owner->slug = $string;
        }

    }

}