<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "in_text_translate".
 *
 * @property integer $id
 * @property string $lang
 * @property string $slug
 * @property string $text
 * @property integer $status
 * @property integer $updated_date
 */
class Lang extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE=1;
    const STATUS_INACTIVE=0;
    const STATUS_DELETE=9;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_text_translate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'text'], 'required'],
            [['status', 'updated_date'], 'integer'],
            [['lang', 'slug', 'text'], 'string', 'max' => 2048],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang' => 'Lang',
            'slug' => 'Slug',
            'text' => 'Text',
            'status' => 'Status',
            'updated_date' => 'Updated Date',
        ];
    }

    public function beforeSave($insert){
        if($insert){
            // $this->lang = 'uz-UZ';
        }else{
            $this->updated_date = time();
        }
        return parent::beforeSave($insert);
    }

    public static function t($message)
    {
        $matn = self::find()->where(['lang'=>self::getCurrentLang(), 'status'=>1, 'slug'=>$message])->asArray()->one();
        if(!empty($matn)) return $matn['text'];
        else {
            $matn = self::find()->where(['lang'=>'uz-UZ', 'status'=>1, 'slug'=>$message])->asArray()->one();
            if (!empty($matn)) {
                return $matn['text'];
            }else{
                return $message;
            }
        }
    }

    public static function getCurrentLang()
    {
//        Yii::$app->language="uz-UZ";
        return Yii::$app->language;
    }
}
