<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Default2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Default2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="default2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Default2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vendor_id',
            'model_id',
            'rasm',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
