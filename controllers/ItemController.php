<?php
/**
 * Created by PhpStorm.
 * User: windgo
 * Date: 16/7/31
 * Time: 上午8:41
 */

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

use app\models\Item;

class ItemController extends Controller
{
	//设置前台布局
	public $layout = 'front';

	public function actionIndex(){

		$t = Yii::$app->request->get("t");
		$t = base64_decode($t);
		$id = Item::encrypt($t, "D", Yii::$app->params['encrypt_key']);
        $ts = Yii::$app->request->get("ts");
		$h = Yii::$app->request->get("h");
		$hash = md5($ts.$id.Yii::$app->params['encrypt_key']);
		if($h == $hash){
			$data = Item::find()->query(["match" => ["_id" => $id]])->one();
			return $this->render("detail", ['item' => $data]);
		}else{
			$this->redirect(Yii::$app->homeUrl);
		}

	}

}