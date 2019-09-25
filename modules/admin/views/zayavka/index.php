<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\dilshod\ZayavkaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zayavkalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zayavka-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?//= Html::a('Create Zayavka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'phone',
            [
                'attribute' => 'phone',
                'value' => function ($model) {
                    return number_format($model->phone, 0, ',', ' ');
                },
            ],
            'message',
            [
                'attribute' => 'status',
                'filter' => false,
                'value' => function ($model) {
                    return  $model->getStatus()[$model->status];
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
