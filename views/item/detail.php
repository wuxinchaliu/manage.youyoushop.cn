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
                <input type="text" name="q" class="placeholder" value="" id="list-input" suggestwidth="528px" autocomplete="off">
            </div>
            <input type="submit" id="list-search-button" class="skin-search-button" value="搜一下">
        </div>
        <?php ActiveForm::end(); ?>
    </nav>
</header>
<div class="list_tab" id="list_tab">
   当前位置：任你搜首页 > <?php echo $item ? $item->title : '';?>
</div>

<div class="bgWhite">
    <!-- detailSoft-box -->
    <div class="detailSoft-box" >
        <div class="soft-header clearfix">
            <span class="pic"><img src="<?php echo $item->file_info['avatar_url'];?>" alt="$item->title" width="64" height="64"></span>
            <div class="soft-info">
                <h1 class="soft-title" itemprop="name">
                    <label><?php echo $item ? $item->title : '';?></label>
                </h1>

            </div>
        </div>
        <!-- soft-summary -->
        <div class="soft-summary soft-summary-mt clearfix">
            <div class="soft-box clearfix">
                <div class="soft-text-l">
                    <div class="downloat-box clearfix">
                        <div class="button-box">
                             <a id="downloader_main" href="/item/download?url=<?php echo $download_url;?>&hash=<?php echo md5(time());?>" class="button downLoad-button">
                                 <span class="text">
                                     <i class="text-icon"></i>
                                     <em></em>
                                 </span>
                                 <span class="dnum">极速下载</span>
                             </a>
                        </div>
                    </div>
                    <ul class="soft-text">
                        <li>
                            <span>资源大小：</span><?php echo round($item->user_info['size']/(1024*1024),2);?>M
                        </li>
                        <li>
                            <span>文件类型：</span><?php echo $item->file_ext;?>
                        </li>
                        <li>
                            <span>文件分类：</span><?php echo \app\models\Item::getCategory($item->category);?>
                        </li>
                        <li>
                            <span>分享时间：</span><?php echo date("Y-m-d H:i:s",substr($item->user_info['share_time'],0,10));?>
                        </li>
                        <li>
                            <span>分享用户：</span>
                            <em class="system-text"><?php echo $item->file_info['username'];?></em>
                        </li>
                        <li>
                            <span>用户主页：</span><a href="">进入用户主页</a></li>
                    </ul>
                </div>
                <div class="soft-text-r">
                    <div class="download-box clearfix ">
                        <div class="relative-soft">

                            <span class="alink-acolor">相关软件：</span>
                            <ul class="down-alink-ul">
                                <li><span>2016-04-20</span>
                                    <a href="/detail/15/145524.shtml">Office2007 免费版</a>
                                </li>
                                <li><span>2016-04-20</span>
                                    <a href="/detail/15/145524.shtml">Office2007 免费版</a>
                                </li>
                                <li><span>2016-04-20</span>
                                    <a href="/detail/15/145524.shtml">Office2007 免费版</a>
                                </li>
                                <li><span>2016-04-27</span><a href="/detail/12/114617.shtml">Word2003 免费版</a>
                                </li>
                                <li><span>2016-05-05</span><a href="/detail/34/335364.shtml">汉王OCR图片文字识别 免费中文版</a></li>
                                <li class="end"><span>2016-07-11</span><a href="/detail/12/115442.shtml">WPS Office </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="soft-bottom">
            <ul>
                <li class="single-item clearfix"><span>相关热搜：</span><div class="filter-words clearfix"><a href="/search?wd=ultraedit%C2%CC%C9%AB%B0%E6&amp;type=1">ultraedit绿色版</a> <a href="/search?wd=ultraedit%CF%C2%D4%D8&amp;type=1">ultraedit下载</a> <a href="/search?wd=UltraEdit%C6%C6%BD%E2%B0%E6&amp;type=1">UltraEdit破解版</a> </div></li>
            </ul>

            <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","weixin","tsina","sqq","tqq","renren","mshare","douban"],"viewText":"分享到：","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","weixin","tsina","sqq","tqq","renren","mshare","douban"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        </div>
        <!-- //detailSoft-box -->
    </div>
</div>


<div style="clear:both;"></div>
<footer id="list-footer" class="tc">

    <a>官方微信</a>&nbsp;|&nbsp;<a>意见反馈</a>|<a>推广合作</a>&nbsp;|&nbsp;<a>使用任你搜前必读</a>
    <span>©2016 Renniso.com 任你搜 京ICP备12006932号-6</span>
</footer>




