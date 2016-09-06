<?php
/**
 * Created by PhpStorm.
 * User: windgo
 * Date: 16/7/17
 * Time: 上午8:37
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

use app\models\Item;

class SController extends Controller
{
    //设置前台布局
    public $layout = 'front';

    public function actionIndex(){
        $s = Yii::$app->request->get("q");
        if(!empty($s)){
            $query = ["common" => ["title" => ["query"=>$s,
                "low_freq_operator"=>'and']]];
            $data = Item::find()->query($query)->all();
            return $this->render("list", ['data' => $data,'keywords' => $s]);
        }
        return $this->render('index');
    }

}