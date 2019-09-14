<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'model_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'short') ?>

    <?php // echo $form->field($model, 'full') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'view') ?>

    <?php // echo $form->field($model, 'compare') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
