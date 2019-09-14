<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%vendor}}".
 *
 * @property integer $id_vendor
 * @property string $name
 * @property integer $id_category
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_vendor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_category'], 'required'],
            [['id_category','status'], 'integer'],
            [['name','name_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vendor' => 'Id',
            'name' => 'Firma nomi',
            'id_category' => 'Kategoriya',
        ];
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'id_category']);
    }
}
