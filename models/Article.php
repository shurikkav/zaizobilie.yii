<?php

namespace app\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public $IdArticleRecords = 31;
    static function tableName(){
        return "core_contents";
    }

}