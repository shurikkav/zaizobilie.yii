<?php
namespace app\components;

use yii\base\Widget;
use yii\db;

class NewsBlock extends Widget
{
    public $CountNewsInBlock=3;
    public $IdNewsRecords=32;

    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select * From core_contents where id_unit=".$this->IdNewsRecords." and is_main=1 and is_vis=1 order by sort limit 0,".$this->CountNewsInBlock);
        $data = $model->queryAll();

        return $this->render("NewsBlock",compact('data'));
    }

}