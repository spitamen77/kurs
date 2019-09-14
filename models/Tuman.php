<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bcms_tuman".
 *
 * @property int $id
 * @property string $name_uz
 * @property int $viloyat_id
 * @property int $status
 * @property string $name_ru
 * @property int $created_at
 * @property int $updated_at
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bcms_tuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name_uz', 'viloyat_id', 'name_ru', 'created_at', 'updated_at'], 'required'],
            [['id', 'viloyat_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name_uz', 'name_ru'], 'string', 'max' => 128],
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
            'viloyat_id' => 'Viloyat ID',
            'status' => 'Status',
            'name_ru' => 'Name Ru',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
