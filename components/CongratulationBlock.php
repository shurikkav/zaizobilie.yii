<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Congratulation;

class CongratulationBlock extends Widget
{
    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select * From core_contents where id_unit=".Congratulation::IdCongratulationRecords." and is_main=1 and is_vis=1 order by sort limit 0,".Congratulation::CountCongratulationInBlock);
        $data = $model->queryAll();

        return $this->render("CongratulationBlock",compact('data'));
    }

}