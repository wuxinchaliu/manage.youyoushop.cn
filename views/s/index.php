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

    <nav class="headNavs fr tr">
        <a href="#"><span>图片</span></a>
        <a href="#"><span>文档</span></a>
        <a href="#"><span>视频</span></a>
        <a href="#"><span>音乐</span></a>
        <a href="#"><span>种子</span></a>
        <a href="#"><span>更多</span></a>
    </nav>
</header>
<div id="main">
    <p id="bd_logo"><a class="skin-logo"></a></p>

    <div id="bd_search">
        <?php $form = ActiveForm::begin([
            'id' => 'search-form',
            'action' => '/s',
            'method' => 'get',

        ]); ?>

            <div id="input-container">
                <input type="hidden" name="ie" value="utf-8">
                <div id="suggest-align" class="skin-search-input">
                    <input type="text" name="q" class="placeholder" id="input" suggestwidth="528px" autocomplete="off">
                </div>
                <input type="submit" id="search-button" class="skin-search-button" value="搜一下">
            </div>
        <?php ActiveForm::end(); ?>
        <ul id="tip">

        </ul>

    </div>

</div>

<footer id="footer" class="tc">
    Copyright©2016 Renniso.com 任你搜索 京ICP备12006932号-6
    <a>意见反馈</a>&nbsp;&nbsp;<a>推广合作</a>&nbsp;&nbsp;<a>官方微信</a>&nbsp;&nbsp;<a>使用百度前必读</a>
</footer>

<script>
    $( "#input" ).keyup(function() {
        var keyword = $(this).val();
        $.ajax({
            method: "POST",
            url: "/s/search",
            data: { keyword: keyword},
            success:function (result) {
                $("#tip").html('');
                if(result['code'] ==0 ){
                    var data = result['data'];
                    for(var key in data){
                        $("#tip").append("<li>"+data[key]+"</li>");
                    }
                }
            }
        });
    });
</script>


