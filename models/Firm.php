<?php
namespace app\models;

use app\models\Firm;
use yii\db\ActiveRecord;


class Firm extends ActiveRecord
{
    public function getDbConnection()
    {
        return Yii::app()->dbCatalog;
    }
    static function tableName(){
        return "firms";
    }
}