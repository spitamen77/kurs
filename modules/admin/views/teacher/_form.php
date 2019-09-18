<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Lang;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\dilshod\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fan')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'biography')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'photo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Lang::t('Save'), ['class' => 'btn btn-success']) ?>
        <a class="btn btn-primary" href="<?=Url::to('index')?>"><?=Lang::t('Back')?></a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
