<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%model}}".
 *
 * @property integer $id_model
 * @property string $name
 * @property integer $id_category
 * @property integer $id_vendor
 * @property string $description
 */
class Model2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_category'], 'required'],
            [['id_category', 'id_vendor','status'], 'integer'],
            [['description'], 'string'],
            [['name','name_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_model' => 'Id ',
            'name' => 'Name',
            'id_category' => 'Kategoriya',
            'id_vendor' => 'Firma',
            'description' => 'To`laroq',
        ];
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'id_category']);
    }

    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['id_vendor'=>'id_vendor']);
    }
}
