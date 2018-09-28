<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "passwords".
 *
 * @property int $user_id
 * @property string $login
 * @property string $password
 */
class Passwords extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
	public $user = false;
	public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
	
     public static function findIdentity($id)
    {
        return static::findOne($id);
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public static function 
    findIdentityByAccessToken($token, $type = null)
    {
      
    }
    
    public function getAuthKey()
    {
       
    }

    public function validateAuthKey($authKey)
    {
      
    }
	
	

	
	
	
	
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'passwords';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'login', 'password'], 'required'],
            [['user_id'], 'integer'],
            [['login'], 'string', 'max' => 11],
            [['password'], 'string', 'max' => 8],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
