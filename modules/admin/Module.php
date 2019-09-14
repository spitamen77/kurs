<?php

namespace app\modules\admin;

use Yii;
use yii\helpers\Url;
/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // parent::init();
        if(Yii::$app->user->isGuest) {
            return Yii::$app->getResponse()->redirect(Url::to(['/site/login']), 302);
        }
        if (Yii::$app->user->identity->username!="admin") {
           return Yii::$app->getResponse()->redirect(Url::to(['/']), 302);
        }

        // custom initialization code goes here
    }
}
