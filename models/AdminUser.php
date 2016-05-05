<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "yy_admin_user".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $salt
 * @property integer $role_id
 * @property integer $user_status
 * @property integer $mobile
 * @property integer $add_time
 * @property integer $last_login
 * @property string $last_ip
 */
class AdminUser extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'user_status', 'mobile', 'add_time', 'last_login'], 'integer'],
            [['username', 'email'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 32],
            [['salt'], 'string', 'max' => 10],
            [['last_ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '用户ID',
            'username' => '用户名',
            'password' => '密码',
            'email' => '邮箱',
            'salt' => 'Salt',
            'role_id' => '角色Id',
            'user_status' => '用户状态',
            'mobile' => '手机号',
            'add_time' => '添加时间',
            'last_login' => '上次登录时间',
            'last_ip' => '上次登录IP',
        ];
    }

    /**
     * @inheritdoc
     * @return array|bool
     * 通过用户名获取用户信息
     */
    public static function findByUsername($username)
    {
        $data = Yii::$app->db->createCommand(["SELECT * FROM ".self::tableName()." WHERE username=:username"],
            [':user_name' => $username])->queryColumn();
        return $data;
    }


}
