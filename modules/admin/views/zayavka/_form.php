<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Lang;

/* @var $this yii\web\View */
/* @var $model app\models\dilshod\Zayavka */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zayavka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a class="btn btn-primary" href='javascript:history.back()'><?=Lang::t('Back')?></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
