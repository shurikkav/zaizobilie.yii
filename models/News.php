<?php

namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{   public $IdNewsRecords = 32;
    static function tableName(){
        return "core_contents";
    }

}