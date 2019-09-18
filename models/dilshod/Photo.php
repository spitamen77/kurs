<?php

namespace app\models\dilshod;

use Yii;
use app\models\Lang;

/**
 * This is the model class for table "in_photo".
 *
 * @property int $id
 * @property string $slug
 * @property string $image
 * @property int $status
 */
class Photo extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE=1;
    const STATUS_INACTIVE=0;
    const STATUS_DELETE=9;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'in_photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['slug'], 'required'],
            [['status'], 'integer'],
            [['slug','info_uz','info_en','info_ru'], 'string', 'max' => 255],
            // [['image'],'file','maxFiles' => 10]
        ];
    }

    public function beforeSave($insert){
        if($insert){
//            $this->child = 0;
            $this->status = self::STATUS_ACTIVE;
        }
        return parent::beforeSave($insert);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => Lang::t('Slug'),
            // 'image' => Lang::t("Image"),
            'info_uz' => "Узбекча",
            'info_en' => "English",
            'info_ru' => "Русский",
            'status' => 'Status',
        ];
    }

    public function getStatus()
    {
        return [
        '1' => Lang::t('Aktiv'),
        '0' => Lang::t('Nofaol'),
    ];
    }

    public function getInfo()
    {
        switch (Yii::$app->language) {
            case 'uz-UZ':
                return $this->info_uz;
                break;
            case 'ru-RU':
                return $this->info_ru;
                break;
            case 'en-US':
                return $this->info_en;
                break;    
            default:
                return $this->info_uz;
                break;
        }
    }

    public static function getPhoto(){
        return self::find()->where(['status'=>self::STATUS_ACTIVE])->one();
    }
    public function getRasm(){
        return $this->hasMany(\app\models\dilshod\Rasm::className(), ['photo_id' => 'id'])->all();
    }
}
