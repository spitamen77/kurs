<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DetailValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Values';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-value-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail_value',
            'value',
            'unit',
            'id_category',
            'id_vendor',
            //'id_model',
            //'id_detail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
