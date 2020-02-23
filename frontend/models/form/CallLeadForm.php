<?php

namespace frontend\models\form;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "lead".
 *
 * @property int $id
 * @property string $name
 * @property string $create_date
 * @property string $email
 * @property string $phone
 * @property string $text_from_client
 */
class CallLeadForm extends ActiveRecord
{
    public $subjectForUser = 'Ваш заказ принят';
    public $bodyForUser = 'Ваш заказ обрабатывается';
    public $subjectToAdmin = 'Новый заказ';
    public $robotCheck;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lead';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_date']
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'text_from_client', 'name', 'phone'], 'string', 'max' => 450],

            [['robotCheck'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'text_from_client' => 'Text From Client',
            'robotCheck' => 'Text From Client',
        ];
    }

    //отправка отбивки юзеру
    public function sendEmailUser($email)
    {

        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(Yii::$app->params['siteEmail'])
            ->setSubject($this->subjectForUser)
            ->setTextBody($this->bodyForUser)
            ->send();
    }

    //отправка нового заказа

    public function sendEmailAdmin()
    {
        $textForAdmin = "
Новый заказ
Имя {$this->name}
Email {$this->email}
Телефон: {$this->phone}
Текст: {$this->text_from_client}
";
        return Yii::$app->mailer->compose()
            ->setTo([
                Yii::$app->params['emailGnedasch2011'],
            ])
            ->setFrom(Yii::$app->params['siteEmail'])
            ->setSubject($this->subjectToAdmin)
            ->setTextBody($textForAdmin)
            ->send();
    }
}
