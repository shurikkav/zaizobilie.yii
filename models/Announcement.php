<?php

namespace app\models;

use yii\db\ActiveRecord;

class Announcement extends ActiveRecord
{
    public $id_unit=44;
    public $id_unit_rub=45;

    static function getIdRubrik(){
        return $this->id_unit_rub;
    }
    static function getIdType(){
        return $this->id_unit;
    }

    static function tableName(){
        return "core_contents";
    }
    static function tableNameRubrik(){
        return "core_rubcolumn";
    }

}