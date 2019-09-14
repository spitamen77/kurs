<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%default}}".
 *
 * @property integer $id
 * @property integer $vendor_id
 * @property integer $model_id
 * @property string $rasm
 */
class Default2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcms_default';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'model_id','status'], 'integer'],
            [['rasm'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendor_id' => 'Vendor ID',
            'model_id' => 'Model ID',
            'rasm' => 'Rasm',
        ];
    }
}
