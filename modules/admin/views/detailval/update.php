<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailValue */

$this->title = 'Update Detail Value: ' . $model->id_detail_value;
$this->params['breadcrumbs'][] = ['label' => 'Detail Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail_value, 'url' => ['view', 'id' => $model->id_detail_value]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
