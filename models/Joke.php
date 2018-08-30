<?php

namespace app\models;

use yii\db\ActiveRecord;

class Joke extends ActiveRecord
{   const IdJokeRecords = 50;
    const CountJokeInBlock=1;

    static function tableName(){
        return "core_contents";
    }

}