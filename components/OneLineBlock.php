<?php
namespace app\components;

use yii\base\Widget;
use yii\db;


class OneLineBlock extends Widget
{
    const OneLineID=83;
    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select text From core_contents where id_unit=".OneLineBlock::OneLineID." and is_main=1 and is_vis=1 order by date_start");
        $data = $model->queryAll();
        return $this->render("OneLineBlock",compact('data'));
    }

}