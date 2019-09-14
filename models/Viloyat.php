<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bcms_viloyat".
 *
 * @property int $id
 * @property string $name_uz
 * @property int $status
 * @property string $name_ru
 * @property int $created_at
 * @property int $updated_at
 */
class Viloyat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bcms_viloyat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name_uz', 'name_ru', 'created_at', 'updated_at'], 'required'],
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name_uz', 'name_ru'], 'string', 'max' => 128],
            [['name_uz'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'status' => 'Status',
            'name_ru' => 'Name Ru',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
