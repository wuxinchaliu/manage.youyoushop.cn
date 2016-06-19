<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = \Yii::$app->name.'--后台登录';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-form">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <!-- Widget starts -->
                <div class="widget worange">
                    <!-- Widget head -->
                    <div class="widget-head">
                        <i class="icon-lock"></i> <?= Html::encode($this->title) ?>
                    </div>

                    <div class="widget-content">
                        <div class="padd">
                            <!-- Login form -->

                            <?php $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'options' => ['class' => 'form-horizontal'],
                                    'fieldConfig' => [
                                            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
                                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                                    ],
                            ]); ?>
                            <?php echo $form->field($model, 'username')->textInput(['autofocus' => false, 'tint']); ?>
                            <?php echo $form->field($model, 'password')->passwordInput(); ?>

                            <?= $form->field($model, 'verifyCode', [
                                    'options' => ['class' => 'form-group form-group-lg'],
                            ])->widget(yii\captcha\Captcha::className(),[
                                    'imageOptions'=>['alt'=>'点击换图','title'=>'点击换图', 'style'=>'cursor:pointer'],
                                    'captchaAction' => 'site/captcha',
                                    'template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-3">{image}</div></div>',
                            ]); ?>


                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-6">
                                    <?php echo Html::submitButton('登 录', ['class' => 'btn btn-danger', 'name' => 'login-button', 'style'=>'margin-right:15px;']) ?>
                                    <?php //echo Html::resetButton('重 置', ['class' => 'btn btn-default', 'name' => '重置']); ?>
                                    <?php echo Html::a("忘记密码", '/site/forget');?>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>

                    <div class="widget-foot">
                        @Power by <a href="http://www.youyoushop.cn" target="_blank">youyoushop.cn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
