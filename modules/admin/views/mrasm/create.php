<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Default2 */

$this->title = 'Create Default2';
$this->params['breadcrumbs'][] = ['label' => 'Default2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="default2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
