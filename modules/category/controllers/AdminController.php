<?php
/**
 * Created by PhpStorm.
 * User: qilin
 * Date: 16/5/11
 * Time: 下午9:13
 */
namespace app\modules\category\controllers;

use yii\web\Controller;
use app\modules\category\models\category;
class AdminController extends Controller
{
    public function actionList()
    {
        return $this->render('index');
    }

    /**
     * 添加分类
     */
    public function actionAdd(){

        $model = new Category();
        return $this->render('add', ['model' => $model]);
    }
}
