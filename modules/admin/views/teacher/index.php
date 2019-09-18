<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Lang;
/* @var $this yii\web\View */
/* @var $searchModel app\models\dilshod\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Lang::t('Teacher');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'fan',
            'phone',
            'email:email',
            // 'biography',
            // 'photo',
            [
             'attribute' =>  Lang::t("Rasm"),
             'format' => 'raw',
             'value' => function ($model) {   
                if (!empty($model->photo))
                  return '<img src="/web/'.$model->photo.'" width="120px" height="auto">'; 
                else return Lang::t('Rasm yuklanmagan');
             },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
