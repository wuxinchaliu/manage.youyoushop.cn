<?php

namespace app\models;
use app\models\AdminUser;
use yii\base\Object;
use yii\web\IdentityInterface;

class User extends Object implements IdentityInterface
{
    public $user_id;
    public $username;
    public $password;
    public $auth_key;
    public $access_token;
    public $email;
    public $salt;
    public $role_id;
    public $user_status;
    public $mobile;
    public $add_time;
    public $last_login;
    public $last_ip;
    /**
     * @inheritdoc
     */
    public static function findIdentity($user_id) {
        $user = self::findById($user_id);
        if ($user) {
            return new static($user);
        }
        return null;
    }


    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = AdminUser::find()->where(array('access_token' => $token))->one();
        if ($user) {
            return new static($user);
        }


        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $user = AdminUser::find()->where(array('username' => $username))->one();
        if ($user) {
            return new static($user);
        }

        return null;
    }

    public static function findById($user_id) {
        $user = AdminUser::find()->where(array('user_id' => $user_id))->asArray()->one();
        if ($user) {
            return new static($user);
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return md5($password.$this->salt) === $this->password;
        //return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
}
