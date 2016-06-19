<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '添加分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-6">
    <div class="widget wgreen">
        <div class="widget-head">
            <div class="pull-left"><?php echo $this->title;?></div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content">
            <?php
            $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-8\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?php echo $form->field($model, 'cate_name')->textInput(['autofocus' => false, 'tint']); ?>
            <?php echo $form->field($model, 'sort'); ?>


            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-8">
                    <?php echo Html::submitButton('登 录', ['class' => 'btn btn-danger', 'name' => 'login-button', 'style'=>'margin-right:15px;']) ?>
                    <?php echo Html::resetButton('重 置', ['class' => 'btn btn-default', 'name' => '重置']); ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

        <div class="widget-foot">
            <!-- Footer goes here -->
        </div>

    </div>
</div>