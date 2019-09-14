<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bcms_item".
 *
 * @property int $item_id
 * @property int $user_id
 * @property int $model_id
 * @property int $category_id
 * @property string $phone
 * @property string $title
 * @property string $short
 * @property string $full
 * @property int $status
 * @property int $created_at
 * @property int $deleted_at
 * @property string $price
 * @property int $view
 * @property int $compare
 * @property int $premium
 * @property int $start_premium
 * @property int $end_premium
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bcms_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'model_id', 'category_id', 'status','viloyat_id','tuman_id', 'created_at', 'deleted_at', 'view', 'compare', 'premium', 'start_premium', 'end_premium','vendor_id'], 'integer'],
            [['model_id', 'category_id', 'phone', 'title', 'full',], 'required'],
            [['full'], 'string', 'max' => 1024],
            [['phone', 'price'], 'string', 'max' => 15],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'user_id' => 'User ID',
            'model_id' => 'Model ID',
            'category_id' => 'Category ID',
            'phone' => 'Phone',
            'title' => 'Title',
            'full' => 'Full',
            'status' => 'Status',
            'created_at' => 'Created At',
            'deleted_at' => 'Deleted At',
            'price' => 'Price',
            'view' => 'View',
            'compare' => 'Compare',
            'premium' => 'Premium',
            'start_premium' => 'Start Premium',
            'end_premium' => 'End Premium',
        ];
    }
}
