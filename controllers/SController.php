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
    public $enableCsrfValidation = false;

    public function actionIndex(){
        $s = Yii::$app->request->get("q");
        if(!empty($s)){
            $query = ["common" => ["title" => ["query"=>$s,
                "low_freq_operator"=>'and']]];
            $data = Item::find()->query($query)->all();
            print_r($data);exit;
            return $this->render("list", ['data' => $data,'keywords' => $s]);
        }
        return $this->render('index');
    }

    public function actionSearch(){
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if(Yii::$app->request->isAjax){
            $data = Yii::$app->request->post();

            if(isset($data['keyword']) && !empty($data['keyword'])){
                $query = [
                    "query" => [
                        "common" => [
                            "title" => [
                                "query"=>$data['keyword'],
                                "low_freq_operator"=>'and'
                            ]
                        ]
                    ],

                ];
                $data = Item::find()->query($query)->all();
                if(!empty($data)){
                    $titles = [];
                    foreach ($data as $k => $v){
                        $titles[] = $v->title;
                    }
                    return [
                        'data' => $titles,
                        'code' => 0,
                    ];

                }
            }
        }
        return [
            'data' => '',
            'code' => 1,
        ];
    }



}