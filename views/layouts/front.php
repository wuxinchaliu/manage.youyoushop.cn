<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>任你搜--百度,新浪网盘资源任你搜索-www.renniso.com</title>
    <link rel="stylesheet" href="/css/style.css"/>

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="/static/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.png">
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <?= $content ?>
</div>

<footer id="footer" class="tc">©2016 Renniso.com 任你搜索 京ICP备12006932号-6</footer>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>