<?php
namespace app\models;

use Yii;
use yii\base\Model;


class RegisterForm extends Model
{
    public $username;
    public $password;
    public $password_confirmation;

public function rules()
{
    return[
        [['username', 'password', 'password_confirmation'], 'required'],
         [['username', 'password', 'password_confirmation'], 'string', 'min'=> 4, 'max' => 16],
        ['password_confirmation', 'compare', 'compareAttribute' => 'password' ],
    ];
}

//register method
public function register() {
    $user = new User();
    $user->username = $this->username;
    $user->password = \yii::$app->security->generatePasswordHash($this->password);
    $user->accessToken = \yii::$app->security->generateRandomString();
    $user->authKey = \yii::$app->security->generateRandomString();
    return $user->save();

}

}