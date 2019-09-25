<?php

namespace app\models\dilshod;

use app\models\Lang;
use Yii;

/**
 * This is the model class for table "in_zayavka".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $message
 * @property int $status
 */
class Zayavka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'in_zayavka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'message'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['phone'], 'string', 'max' => 15],
            [['message'], 'string', 'max' => 2048],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Lang::t('Name'),
            'phone' => Lang::t('Phone'),
            'message' => Lang::t('Message'),
            'status' => 'Status',
        ];
    }

    public function getStatus()
    {
        return [
            '1' => Lang::t('Tekshirilgan'),
            '0' => Lang::t('Ko`rilmagan'),
        ];
    }

    public static function getNew()
    {
        return self::find()->where(['status'=>0])->count();
    }
}
