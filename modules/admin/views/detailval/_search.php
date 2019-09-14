<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\DetailValueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-value-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detail_value') ?>

    <?= $form->field($model, 'value') ?>

    <?= $form->field($model, 'unit') ?>

    <?= $form->field($model, 'id_category') ?>

    <?= $form->field($model, 'id_vendor') ?>

    <?php // echo $form->field($model, 'id_model') ?>

    <?php // echo $form->field($model, 'id_detail') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
