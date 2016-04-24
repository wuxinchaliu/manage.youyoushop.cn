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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?>23423423</title>
    <link href="/static/style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/style/font-awesome.css">
    <link href="/static/style/style.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="/static/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <?= $content ?>
</div>


<!-- JS -->
<script src="/static/js/jquery.js"></script>
<script src="/static/js/bootstrap.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
