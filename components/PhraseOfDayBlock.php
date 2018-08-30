<?php
namespace app\components;

use yii\base\Widget;
use yii\db;


class PhraseOfDayBlock extends Widget
{
    const PhraseOfDayID=82;
    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select text From core_contents where id_unit=".PhraseOfDayBlock::PhraseOfDayID." and is_main=1 and is_vis=1 order by date_start limit 1");
        $data = $model->queryAll();
        return $this->render("PhraseOfDayBlock",compact('data'));
    }

}