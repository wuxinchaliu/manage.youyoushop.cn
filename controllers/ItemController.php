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
    public $enableCsrfValidation = false;

    public function actionIndex(){

        $t = Yii::$app->request->get("t");
        $t = base64_decode($t);
        $id = Item::encrypt($t, "D", Yii::$app->params['encrypt_key']);
        $ts = Yii::$app->request->get("ts");
        $h = Yii::$app->request->get("h");
        $hash = md5($ts.$id.Yii::$app->params['encrypt_key']);
        if($h == $hash){
            $data = Item::find()->query(["match" => ["_id" => $id]])->one();
            $download_url = 'https://pan.baidu.com/share/link?shareid='.$data->share_id.'&uk='.$data->uid;
            $download_url = Item::encrypt($download_url,'E',Yii::$app->params['encrypt_key']);
            return $this->render("detail", ['item' => $data,'download_url' => base64_encode($download_url)]);
        }else{
            $this->redirect(Yii::$app->homeUrl);
        }
    }
    public function actionDownload(){
        $t = Yii::$app->request->get("url");
        $t = base64_decode($t);
        $url = Item::encrypt($t, "D", Yii::$app->params['encrypt_key']);
        header("Location: $url");
        exit;
    }

}