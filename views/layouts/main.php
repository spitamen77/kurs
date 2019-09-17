<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Lang;

AppAsset::register($this);
// echo "<pre>"; var_dump($content);exit();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- <meta charset="<?= Yii::$app->charset ?>"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
     <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/themes/edutech/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/themes/edutech/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/themes/edutech/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/themes/edutech/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/themes/edutech/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/themes/edutech/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/themes/edutech/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/themes/edutech/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/themes/edutech/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/themes/edutech/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/themes/edutech/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/themes/edutech/favicon/favicon-16x16.png">
    <link rel="manifest" href="/themes/edutech/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/themes/edutech/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Og:type -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=Lang::t('Training center Outcome Tree')?>">
    <meta property="og:title" content="<?= Html::encode($this->title) ?>">
    <meta property="og:description" content="=====">
    <meta property="og:url" content="http://www.outcometree.uz<?=Yii::$app->request->url?>">
    <meta property="og:locale" content="<?= Yii::$app->language ?>">
    <meta property="og:image" content="-====">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="http://www.websar.uz">
    
<?php 
    // echo "<pre>"; var_dump($this);exit;
?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="main-page-wrapper">
       <!-- Banner Popup Start 

        <?=Yii::$app->controller->renderPartial("//layouts/header")?>
        <?= $content ?>
        <?=Yii::$app->controller->renderPartial("//layouts/footer")?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
