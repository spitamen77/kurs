<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%detail}}".
 *
 * @property integer $id_detail
 * @property string $name
 * @property integer $id_category
 * @property integer $id_parent_detail
 */
class Detail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_category','name_uz'], 'required'],
            [['id_category', 'id_parent_detail','status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id',
            'name' => 'Name',
            'id_category' => 'Kategoriya',
            'id_parent_detail' => 'Ona detali',
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
