<?php
namespace app\models;

use Yii;
//use yii\base\Model;

    class Project extends \yii\db\ActiveRecord
    {
        public static function tableName()
        {
            return 'project';
        }

    }


?>