<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $id_category
 * @property string $name
 * @property string $uniqName
 * @property integer $id_parent
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','name_uz'], 'required'],
            [['id_parent','status'], 'integer'],
            [['name', 'uniqName'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category' => 'Id',
            'name' => 'Name',
            'uniqName' => 'To`liq Nomi',    
            'id_parent' => 'Id Parent',
        ];
    }

    public function getVendor()
    {
        return $this->hasMany(Vendor::className(), ['id_category' => 'id_category']);
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function getCategory()
    {
        if (Yii::$app->language=="uz-UZ") $lang = "_uz";
        else $lang = "";
        // return self::find()->where(['name'.$lang=>])
    }
}
