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
    <a href=""  onmousedown="return c({'fm':'tab','tab':'news'})">图片</a>
    <a href="" onmousedown="return c({'fm':'tab','tab':'tieba'})">视频</a>
    <a href="" onmousedown="return c({'fm':'tab','tab':'zhidao'})">文档</a>
    <a href="" onmousedown="return c({'fm':'tab','tab':'zhidao'})">种子</a>
    <a href="//www.baidu.com/more/" onmousedown="return c({'fm':'tab','tab':'more'})">更多»</a>
</div>

    <!--start main start-->
    <div id="container">
        <!--start main left-->
        <div id="main-left">
            <ul class="ul-result">
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
                <li class="li-result">
                    <h3 class="title"><a href="www.dd.com">中国人民共和国过过过</a></h3>
                    <p class="desc">撒发送发送到发送放大书法士大夫撒地方撒风</p>
                    <p class="link">http://www.link.com/adf/?dd=kj</p>
                </li>
            </ul>
        </div>
        <!--start main right-->
        <div id="main-right">
            <h3>今日热搜</h3>
            <table class="mh-list">
                <tbody>
                <tr>
                    <td class="mh-rank">
                        <em>1.</em>
                    </td>
                    <td>
                        <a href="hs" target="_blank">女子购蛋糕被插菊花<i class="mh-new"></i></a>
                    </td>
                    <td class="mh-num">91229</td>
                    <td class="mh-col-statu">
                        <span class="mh-statu mh-statu-up"></span>
                    </td>
                </tr>
                <tr>
                    <td class="mh-rank">
                        <em>2.</em>
                    </td>
                    <td>
                        <a href="" target="_blank">北京暴雨橙色预警<i class="mh-new"></i></a></td><td class="mh-num">87797</td><td class="mh-col-statu"><span class="mh-statu mh-statu-up"></span></td></tr><tr><td class="mh-rank"><em>3.</em></td><td><a href="https://www.so.com/s?q=%E7%9B%B8%E6%9C%BA%E4%B8%A2%E5%A4%B13%E5%B9%B4%E6%89%BE%E5%9B%9E&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;3&quot;}">相机丢失3年找回<i class="mh-new"></i></a></td><td class="mh-num">86732</td><td class="mh-col-statu"><span class="mh-statu mh-statu-up"></span></td></tr><tr><td class="mh-rank">4.</td><td><a href="https://www.so.com/s?q=%E5%AD%99%E5%A5%B3%E8%A2%AB%E5%A5%B6%E5%A5%B6%E9%80%81%E4%BA%BA%E5%9C%86%E6%88%BF&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;4&quot;}">孙女被奶奶送人圆房</a></td><td class="mh-num">83640</td><td class="mh-col-statu"><span class="mh-statu mh-statu-down"></span></td></tr><tr><td class="mh-rank">5.</td><td><a href="https://www.so.com/s?q=%E8%BF%9D%E7%AB%A0%E7%94%B7%E5%AD%90%E6%88%90%E8%A1%A8%E6%83%85%E5%8C%85&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;5&quot;}">违章男子成表情包<i class="mh-new"></i></a></td><td class="mh-num">83274</td><td class="mh-col-statu"><span class="mh-statu mh-statu-up"></span></td></tr><tr><td class="mh-rank">6.</td><td><a href="https://www.so.com/s?q=%E9%A6%96%E9%83%BD%E6%9C%BA%E5%9C%BA%E5%8F%96%E6%B6%88%E8%88%AA%E7%8F%AD&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;6&quot;}">首都机场取消航班<i class="mh-new"></i></a></td><td class="mh-num">81442</td><td class="mh-col-statu"><span class="mh-statu mh-statu-up"></span></td></tr><tr><td class="mh-rank">7.</td><td><a href="https://www.so.com/s?q=%E7%94%B7%E5%AD%90%E4%BD%BF%E7%BE%8E%E7%8A%AC%E8%AE%A1%E5%81%B7%E7%8B%97&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;7&quot;}">男子使美犬计偷狗</a></td><td class="mh-num">78584</td><td class="mh-col-statu"><span class="mh-statu mh-statu-down"></span></td></tr><tr><td class="mh-rank">8.</td><td><a href="https://www.so.com/s?q=%E8%8A%B140%E4%B8%87%E4%B9%B0200%E4%B8%87%E5%81%87%E5%B8%81&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;8&quot;}">花40万买200万假币<i class="mh-new"></i></a></td><td class="mh-num">77693</td><td class="mh-col-statu"><span class="mh-statu mh-statu-up"></span></td></tr><tr><td class="mh-rank">9.</td><td><a href="https://www.so.com/s?q=%E6%8A%A5%E6%80%A8%E5%88%86%E6%88%BF%E4%B8%8D%E5%85%AC%E9%97%B9%E7%81%B5%E5%A0%82&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;9&quot;}">报怨分房不公闹灵堂</a></td><td class="mh-num">74366</td><td class="mh-col-statu"><span class="mh-statu mh-statu-down"></span></td></tr><tr><td class="mh-rank">10.</td><td><a href="https://www.so.com/s?q=%E4%B8%8A%E6%B5%B7%E6%B0%B4%E4%B8%8A%E9%A3%9E%E6%9C%BA%E6%92%9E%E6%A1%A5&amp;src=know_side_nlp&amp;tn=news" target="_blank" data-md="{&quot;b&quot;:&quot;list&quot;, &quot;p&quot;:&quot;10&quot;}">上海水上飞机撞桥<i class="mh-new"></i></a></td><td class="mh-num">73707</td><td class="mh-col-statu"><span class="mh-statu mh-statu-up"></span></td></tr></tbody></table>
        </div>
        <div style="clear:both;"></div>
    </div>

    <!--start relation search-->
    <div class="relation-search">
        <h2>相关搜索:</h2>
        <table cellpadding="0">
            <tbody>
                <tr>
                    <th>
                        <a href="">php教程</a>
                    </th>
                    <td></td>
                    <th>
                        <a href="">php下载</a>
                    </th>
                    <td></td>
                    <th>
                        <a href="">php是什么</a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="">php教程</a>
                    </th>
                    <td></td>
                    <th>
                        <a href="">php下载</a>
                    </th>
                    <td></td>
                    <th>
                        <a href="">php是什么</a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="">php教程</a>
                    </th>
                    <td></td>
                    <th>
                        <a href="">php下载</a>
                    </th>
                    <td></td>
                    <th>
                        <a href="">php是什么</a>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

<div style="clear:both;"></div>
<footer id="list-footer" class="tc">

    <a>官方微信</a>&nbsp;|&nbsp;<a>意见反馈</a>|<a>推广合作</a>&nbsp;|&nbsp;<a>使用百度前必读</a>
    <span>©2016 Renniso.com 任你搜 京ICP备12006932号-6</span>
</footer>



