<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Default2 */

$this->title = 'Update Default2: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Default2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="default2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
