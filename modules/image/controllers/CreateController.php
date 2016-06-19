<?php

namespace app\modules\image\controllers;

use yii\web\Controller;

class CreateController extends Controller
{
    public function actionIndexPage()
    {
        //http://youyou.qifa100.com/image/create-page/index-page
        echo 'd';exit;
        return $this->render('index');
    }
}
