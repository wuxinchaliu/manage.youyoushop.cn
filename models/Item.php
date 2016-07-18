<?php
/**
 * Created by PhpStorm.
 * User: windgo
 * Date: 16/7/14
 * Time: 下午3:15
 */
namespace app\models;

use Yii;
use yii\elasticsearch\ActiveRecord;
class Item extends ActiveRecord
{
	/**
	 * @return array the list of attributes for this record
	 */
	public function attributes()
	{
		// path mapping for '_id' is setup to field 'id'
		return ['rid', 'uid', 'share_id', 'feed_type','file_ext','title','category','file_info','user_info','create_time'];
	}


	/**
	 * Defines a scope that modifies the `$query` to return only active(status = 1) customers
	 */
	public static function active($query)
	{
		$query->andWhere(['category' => 1]);
	}

	public static function index(){
		return "youyou";
	}

	public static function type(){
		return "resource";
	}
}