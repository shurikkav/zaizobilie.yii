<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2018
 * Time: 13:49
 */

namespace app\models;

use yii\base\Model;


class SubscribeForm extends Model
{
    public $name;
    public $email;
    public $param=array();

    public function attributeLabels()
    {
        return [
            'name' => 'Ваше Имя',
            'email' => 'Ваш Email',
            'param' => 'Что вы хотите получать?',
        ];
    }

    public function rules()
    {
        return [
            // name, email, subject и body атрибуты обязательны
            [['name', 'email', 'param'], 'safe'],

            // атрибут email должен быть правильным email адресом
            ['email', 'email'],
        ];
    }
}