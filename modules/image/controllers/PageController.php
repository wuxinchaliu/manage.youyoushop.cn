<?php
/**
 * Created by PhpStorm.
 * User: windgo
 * Date: 16/6/19
 * Time: 下午10:16
 */
namespace app\modules\image\controllers;

use yii\web\Controller;

class PageController extends Controller
{
	public function actionHome()
	{
		$this->layout='column1';
        echo 'home page index ';exit;
		return $this->render('index');
	}

	public function actionList()
	{
		$this->layout='column1';
		echo 'home page index ';exit;
		return $this->render('index');
	}

	public function actionArticle()
	{
		$this->layout='column1';
		echo 'home page index ';exit;
		return $this->render('index');
	}
	public function actionCate()
	{
		$this->layout='column1';
		echo 'home page index ';exit;
		return $this->render('index');
	}


}
