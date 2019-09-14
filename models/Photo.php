<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bcms_photo".
 *
 * @property int $id
 * @property int $item_id
 * @property string $photo
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bcms_photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'photo'], 'required'],
            [['item_id'], 'integer'],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'photo' => 'Photo',
        ];
    }
}
