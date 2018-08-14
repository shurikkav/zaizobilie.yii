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
    function run() // Меню рубрики
    {

        $connection = \Yii::$app->db;

        $model = $connection->createCommand("Select `img1`, `url`, `name` From core_partners where  `is_vis`=1 order by `sort`");
        $data = $model->queryAll();
        return $this->render('getPartners', compact('data'));
    }

}