<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;


class Vote extends ActiveRecord
{
    public $pref="core";

    public function getResult(){
        $id=$this->getId();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPref()
    {
        return $this->pref;
    }


    static function tableName(){
        return "core_votes";
    }



}