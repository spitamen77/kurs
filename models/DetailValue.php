<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%detail_value}}".
 *
 * @property integer $id_detail_value
 * @property string $value
 * @property string $unit
 * @property integer $id_category
 * @property integer $id_vendor
 * @property integer $id_model
 * @property integer $id_detail
 */
class DetailValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_detail_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'id_category', 'id_model', 'id_detail'], 'required'],
            [['id_category', 'id_vendor', 'id_model', 'id_detail','status'], 'integer'],
            [['value', 'unit'], 'string', 'max' => 255],
            [['id_category', 'id_vendor', 'id_model', 'id_detail'], 'unique', 'targetAttribute' => ['id_category', 'id_vendor', 'id_model', 'id_detail'], 'message' => 'The combination of Id Category, Id Vendor, Id Model and Id Detail has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detail_value' => 'Id',
            'value' => 'Xarakteristika2',
            'unit' => 'Qiymat birligi',
            'id_category' => 'Kategoriya',
            'id_vendor' => 'Firma',
            'id_model' => 'Model',
            'id_detail' => 'Xarakteristika',
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

    public function getModel()
    {
        return $this->hasOne(Model2::className(), ['id_model'=>'id_model']);
    }
}
