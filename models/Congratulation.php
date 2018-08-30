<?php

namespace app\models;

use yii\db\ActiveRecord;

class Congratulation extends ActiveRecord
{   const IdCongratulationRecords = 80;
    const CountCongratulationInBlock=1;

    static function tableName(){
        return "core_contents";
    }

}