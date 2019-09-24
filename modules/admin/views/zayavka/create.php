<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\dilshod\Zayavka */

$this->title = 'Create Zayavka';
$this->params['breadcrumbs'][] = ['label' => 'Zayavkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zayavka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
