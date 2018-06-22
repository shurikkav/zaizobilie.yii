<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.06.2018
 * Time: 12:41
 */

namespace app\components;

use yii\base\Widget;
use yii\db;

class CommentsBlock extends Widget
{
    public $CountCommInBlock=3;
    public $IdCommRecords=41;

    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем $CountCommInBlock записей с типом $IdCommRecords
        $model = $connection->createCommand("Select * From core_contents where id_unit=".$this->IdCommRecords." and  is_vis=1 order by sort limit 0,".$this->CountCommInBlock);
        $data = $model->queryAll();

        return $this->render("CommentsBlock",compact('data'));
    }

}