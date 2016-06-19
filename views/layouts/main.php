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
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <link href="/static/style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/style/font-awesome.css">
    <link href="/static/style/style.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="/static/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/static/images/favicon.png">
</head>
<body>
<?php $this->beginBody() ?>


<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">

        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <span style="height: 50px;line-height: 50px;font-size:18px;font-weight: bold;"><?php echo \Yii::$app->name;?></span>
            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-user"></i> 管理员 <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> 资料</a></li>
                        <li><a href="#"><i class="icon-cogs"></i> 设置</a></li>
                        <li><a href="/site/logout"><i class="icon-off"></i> 退出</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">

        <ul id="nav">
            <li><a href="/site/index" class="open"><i class="icon-home"></i> 首页</a>
            </li>
            <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 分类管理  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
                <ul>
                    <li><a href="/category/admin/list">分类管理</a></li>
                    <li><a href="">属性管理</a></li>
                    <li><a href="widgets3.html">分类属性</a></li>
                </ul>
            </li>
            <li class="has_sub"><a href="#"><i class="icon-file-alt"></i> 页面模块1 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
                <ul>
                    <li><a href="post.html">表单Post</a></li>
                    <li><a href="login.html">登录页</a></li>
                    <li><a href="register.html">注册页面</a></li>
                    <li><a href="support.html">帮助页</a></li>
                    <li><a href="invoice.html">购物清单</a></li>
                    <li><a href="profile.html">个人资料</a></li>
                    <li><a href="gallery.html">相册页面</a></li>
                </ul>
            </li>
            <li class="has_sub"><a href="#"><i class="icon-file-alt"></i> 页面模块2  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
                <ul>
                    <li><a href="media.html">媒体</a></li>
                    <li><a href="statement.html">描述</a></li>
                    <li><a href="error.html">错误</a></li>
                    <li><a href="error-log.html">错误日志</a></li>
                    <li><a href="calendar.html">日历</a></li>
                    <li><a href="grid.html">网格</a></li>
                </ul>
            </li>
            <li><a href="charts.html"><i class="icon-bar-chart"></i>图表</a></li>
            <li><a href="tables.html"><i class="icon-table"></i>表格</a></li>
            <li><a href="forms.html"><i class="icon-tasks"></i>表单</a></li>
            <li><a href="ui.html"><i class="icon-magic"></i>UI图标</a></li>
            <li><a href="calendar.html"><i class="icon-calendar"></i>日历</a></li>
        </ul>
    </div>

    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">

        <div class="container">
            <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?php echo $content; ?>
        </div>

    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="/static/js/jquery.js"></script>
<script src="/static/js/bootstrap.js"></script>
<script src="/static/js/custom.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
