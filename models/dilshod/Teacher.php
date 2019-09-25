<?php

namespace app\models\dilshod;

use Yii;
use app\models\Lang;
/**
 * This is the model class for table "in_teacher".
 *
 * @property int $id
 * @property string $name
 * @property string $fan
 * @property string $biography
 * @property string $photo
 * @property string $phone
 * @property string $email
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'in_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fan', 'biography'], 'required'],
            [['name', 'fan', 'photo', 'email','hash'], 'string', 'max' => 128],
            [['biography'], 'string', 'max' => 4096],
            [['phone'], 'string', 'max' => 20],
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
            'fan' => 'Fan',
            'biography' => Lang::t('Biography'),
            'photo' => Lang::t('Photo'),
            'phone' => Lang::t('Phone'),
            'email' => 'Email',
        ];
    }
}
