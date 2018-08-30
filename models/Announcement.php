<?php

namespace app\models;

use yii\db\ActiveRecord;

class Announcement extends ActiveRecord
{
    const id_unit=44;
    const id_unit_rub=45;

    static function getIdRubrik(){
        return Announcement::id_unit_rub;
    }
    static function getIdType(){
        return Announcement::id_unit;
    }

    static function tableName(){
        return "core_contents";
    }
    static function tableNameRubrik(){
        return "core_rubcolumn";
    }

}