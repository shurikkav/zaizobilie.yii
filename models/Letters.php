<?php

namespace app\models;

use yii\db\ActiveRecord;

class Letters extends ActiveRecord
{   const IdLettersRecords = 81;
    static function tableName(){
        return "core_contents";
    }

}