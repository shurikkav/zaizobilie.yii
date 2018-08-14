<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;


class QA extends ActiveRecord
{

    static function tableName(){
        return "core_qa";
    }



}