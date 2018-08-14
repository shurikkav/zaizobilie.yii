<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;


class SubscribeModuls extends ActiveRecord
{
    public $id_unit;
    public $table;
    public $name;
    public $subscribe;

    public function getId(){
        return $this->id;
    }

    // таблица с почтовыми ящиками
    static function tableName(){
        return "core_units";
    }


}