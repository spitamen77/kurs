<?php

namespace app\models\dilshod;

use Yii;
use app\models\dilshod\MenuItemTrans;
use app\models\dilshod\Menu;
use app\models\Lang;
/**
 * This is the model class for table "in_menu_item".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $title
 * @property string $photo
 * @property string $short
 * @property string $text
 * @property string $slug
 * @property integer $views
 * @property integer $status
 * @property integer $price
 * @property integer $sale
 * @property integer $pieces
 * @property integer $user_id
 * @property integer $created_date
 * @property integer $updated_date
 */
class MenuItem extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE=1;
    const STATUS_INACTIVE=0;
    const STATUS_DELETE=9;
    // public $lang = ['uz-UZ'=>"O`zbekcha",'ru-RU'=>"Русский","en-US"=>"English"];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in_menu_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'title',  'slug', ], 'required'],
            ['slug', 'unique', 'message' => 'Slug mavjud'],
            [['menu_id', 'views', 'status', 'price', 'sale', 'user_id','teacher_id', 'created_date', 'updated_date'], 'integer'],
            [['text'], 'string'],
            [['file'], 'file'],
            [['title', 'photo', 'slug','time','file'], 'string', 'max' => 128],
            [['short'], 'string', 'max' => 255],
        ];
    }

    public function beforeSave($insert){
        if($insert){
            $this->user_id = Yii::$app->user->identity->id;
            $this->created_date = time();
            $this->status = self::STATUS_ACTIVE;
        }else{
            $this->user_id = Yii::$app->user->identity->id;
            $this->updated_date = time();
        }
        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes){
        if ($this->status==0) {
            $menu = MenuItemTrans::find()->where(['item_id'=>$this->id])->all();
            if (!empty($menu)) {
                foreach ($menu as $key => $value) {
                    $value->status = MenuItemTrans::STATUS_INACTIVE;
                    $value->save(false);
                }
            }
        }
        else {
            $menu = MenuItemTrans::find()->where(['item_id'=>$this->id])->all();
            if (!empty($menu)) {
                foreach ($menu as $key => $value) {
                    $value->status = MenuItemTrans::STATUS_ACTIVE;
                    $value->save(false);
                }
            }
        }
        if($insert){
            $trans = new MenuItemTrans();
            $trans->item_id = $this->id;
            $trans->lang = "uz-UZ";
            $trans->title = $this->title;
            $trans->short = $this->short;
            $trans->text = $this->text;
            $trans->save();
        }else{}    
        return parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'title' => Lang::t('Title'),
            'photo' => Lang::t('Photo'),
            'short' => Lang::t('Short'),
            'text' => Lang::t('Text'),
            'slug' => Lang::t('Slug'),
            'views' => Lang::t('Views'),
            'status' => Lang::t('Status'),
            'price' => Lang::t('Price'),
            'sale' => Lang::t('Month'),
            'teacher_id' => Lang::t('Teacher'),
            'time' => Lang::t('Time'),
            'user_id' => 'User ID',
            'file' => 'File',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }

    public function getMenu()
    {
        $menu = Menu::find()->where(['status'=>1])->all();
        // $menu = Menu::find()->where(['status'=>1])->all();
        $list = [];
        foreach ($menu as $key => $value) {
            $list["$value->id"] = $value->title;
            # code...
        }
        return $list;
    }

    public function getMenuTitle($id)
    {
        $menu = Menu::find()->where(['id'=>$id])->one();
        return $menu->title;
    }

    public function getStatus()
    {
        return [
        '1' => Lang::t('Aktiv'),
        '0' => Lang::t('Nofaol'),
    ];
    }

    public function getTemplate()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    public function getMenutemplate()
    {
        return $this->hasMany(MenuItemTrans::className(), ['item_id' => 'id']);
    }

    public function getTranslate()
    {
        $trans = $this->hasOne(MenuItemTrans::className(), ['item_id' => 'id'])->where(['lang'=>Yii::$app->language]);
        if (!empty($trans)) return $trans;
        return $this->hasOne(MenuItemTrans::className(), ['item_id' => 'id'])->where(['lang'=>"uz-UZ"]);
    }

    public function getTeacher()
    {
        $menu = Teacher::find()->orderBy(['id'=>SORT_DESC])->all();
        $list = [];
        foreach ($menu as $key => $value) {
            $list["$value->id"] = $value->name." (".$value->fan.")";
        }
        return $list;
    }
}
