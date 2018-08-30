<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Letters;

class LettersBlock extends Widget
{
    public $CountLettersInBlock=3;

    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select * From core_contents where id_unit=".Letters::IdLettersRecords." and is_main=1 and is_vis=1 order by sort limit 0,".$this->CountLettersInBlock);
        $data = $model->queryAll();

        return $this->render("LettersBlock",compact('data'));
    }

}