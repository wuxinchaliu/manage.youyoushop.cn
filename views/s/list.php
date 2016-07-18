<?php
/**
 * Created by PhpStorm.
 * User: windgo
 * Date: 16/7/17
 * Time: 上午8:39
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>


<header id="header">
	<nav class="headNavs">
		<a href="/" class="fl"><img src="/images/logo.png" alt="任你搜" width="120"/> </a>
        <?php $form = ActiveForm::begin([
                'id' => 'search-form',
                'action' => '/s',
                'method' => 'get',
                'options' => ['class' => 'fl'],
        ]); ?>

        <div id="list-input-container">
            <input type="hidden" name="ie" value="utf-8">
            <div id="list-suggest-align" class="skin-search-input">
                <input type="text" name="q" class="placeholder" id="list-input" suggestwidth="528px" autocomplete="off">
            </div>
            <input type="submit" id="list-search-button" class="skin-search-button" value="搜一下">
        </div>
        <?php ActiveForm::end(); ?>
	</nav>
</header>
<div class="list_tab" id="list_tab">
    <b>网页</b>
    <a href="http://news.baidu.com/ns?cl=2&amp;rn=20&amp;tn=news&amp;word=ef" wdfield="word" onmousedown="return c({'fm':'tab','tab':'news'})">新闻</a>
    <a href="http://tieba.baidu.com/f?kw=ef&amp;fr=wwwt" wdfield="kw" onmousedown="return c({'fm':'tab','tab':'tieba'})">贴吧</a>
    <a href="http://zhidao.baidu.com/q?ct=17&amp;pn=0&amp;tn=ikaslist&amp;rn=10&amp;word=ef&amp;fr=wwwt" wdfield="word" onmousedown="return c({'fm':'tab','tab':'zhidao'})">知道</a>

    <a href="//www.baidu.com/more/" onmousedown="return c({'fm':'tab','tab':'more'})">更多»</a>
</div>



