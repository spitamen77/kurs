<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Lang;
/* @var $this yii\web\View */
/* @var $model app\models\dilshod\Zayavka */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Zayavkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="zayavka-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-success" href='javascript:history.back()'><?=Lang::t('Back')?></a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'name',
            'phone',
            'message',
            [
                'attribute' => 'status',
                'filter' => false,
                // 'format' => 'raw',
                'value' => function ($model) {
                    return  $model->getStatus()[$model->status];
                },
            ],
        ],
    ]) ?>

</div>
