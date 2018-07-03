<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.06.2018
 * Time: 10:43
 */

namespace app\models;

use app\models\news;
use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    static function tableName(){
        return "core_contents";
    }

}