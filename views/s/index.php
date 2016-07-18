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
		<a href="#"><span>其它</span></a>
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

	</div>

</div>



