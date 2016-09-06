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
    public static $cateName = [
        '3' => '图片',
        '4' => '文档',
        '1' => '视频',
        '7' => '种子',
        '2' => '音乐',
        '6' => '其它',
        '5' => '软件'
    ];
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
        return "renniso";
    }

    public static function type(){
        return "resource";
    }

    public static function getCategory($index){
        if(isset(self::$cateName[$index])){
            return self::$cateName[$index];
        }else{
            return "其它";
        }
    }
    
    /*********************************************************************
    函数名称:encrypt
    函数作用:加密解密字符串
    使用方法:
    加密     :encrypt('str','E','nowamagic');
    解密     :encrypt('被加密过的字符串','D','nowamagic');
    参数说明:
    $string   :需要加密解密的字符串
    $operation:判断是加密还是解密:E:加密   D:解密
    $key      :加密的钥匙(密匙);
     *********************************************************************/
    public static function encrypt($string,$operation,$key='')
    {
        $key=md5($key);
        $key_length=strlen($key);
        $string=$operation=='D'?base64_decode($string):substr(md5($string.$key),0,8).$string;
        $string_length=strlen($string);
        $rndkey=$box=array();
        $result='';
        for($i=0;$i<=255;$i++)
        {
            $rndkey[$i]=ord($key[$i%$key_length]);
            $box[$i]=$i;
        }
        for($j=$i=0;$i<256;$i++)
        {
            $j=($j+$box[$i]+$rndkey[$i])%256;
            $tmp=$box[$i];
            $box[$i]=$box[$j];
            $box[$j]=$tmp;
        }
        for($a=$j=$i=0;$i<$string_length;$i++)
        {
            $a=($a+1)%256;
            $j=($j+$box[$a])%256;
            $tmp=$box[$a];
            $box[$a]=$box[$j];
            $box[$j]=$tmp;
            $result.=chr(ord($string[$i])^($box[($box[$a]+$box[$j])%256]));
        }
        if($operation=='D')
        {
            if(substr($result,0,8)==substr(md5(substr($result,8).$key),0,8))
            {
                return substr($result,8);
            }
            else
            {
                return'';
            }
        }
        else
        {
            return str_replace('=','',base64_encode($result));
        }
    }
    
}