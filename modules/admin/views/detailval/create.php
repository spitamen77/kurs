<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailValue */

$this->title = 'Create Detail Value';
$this->params['breadcrumbs'][] = ['label' => 'Detail Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
