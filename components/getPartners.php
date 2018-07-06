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

class getPartners extends Widget
{
    public $idunit = 43;
    function run() // Меню рубрики
    {

        $connection = \Yii::$app->db;

        $model = $connection->createCommand("Select `img1`, `url`, `name` From core_contents where id_unit=".$this->idunit." AND `is_vis`=1 AND `pid`='0' order by `sort`");
        $data = $model->queryAll();
        return $this->render('getPartners', compact('data'));
    }

}