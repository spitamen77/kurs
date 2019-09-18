<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Lang;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\dilshod\Teacher */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Lang::t('Teacher'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="teacher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Lang::t('Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Lang::t('Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-success" href="<?=Url::to('index')?>"><?=Lang::t('Back')?></a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
            'fan',
            'phone',
            'email:email',
            'biography',
            // 'photo',
            [
             'attribute' =>  Lang::t("Rasm"),
             'format' => 'raw',
             'value' => function ($model) {   
                if (!empty($model->photo))
                  return '<img src="/web/'.$model->photo.'" width="320px" height="auto">'; 
                else return Lang::t('Rasm yuklanmagan');
             },
            ],
        ],
    ]) ?>

</div>
