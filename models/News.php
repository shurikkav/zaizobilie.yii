<?php

namespace app\models;

use app\models\news;
use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    static function tableName(){
        return "core_contents";
    }

}