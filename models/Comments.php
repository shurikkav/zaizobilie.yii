<?php

namespace app\models;

use yii\db\ActiveRecord;

class Comments extends ActiveRecord
{
    public $name;
    public $email;
    const IdCommentsRecords = 41;
    
    static function tableName(){
        return "core_contents";
    }
    
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}