<?php

namespace app\models;

use app\models\Menu;
use yii\db\ActiveRecord;

class Menu extends ActiveRecord
{   public static $IdMenuRecords = 24;
    
    static function tableName(){
        return "core_contents";
    }

}