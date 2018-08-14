<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;


class Subscribe extends ActiveRecord
{
    public $id;
    public $name;
    public $email;
    public $param=array();

    public function getId(){
        return $this->id;
    }

    public function getActionForEmail($email){
        //return $this->id;
    }


    // таблица с почтовыми ящиками
    static function tableName(){
        return "core_subscribe";
    }


}