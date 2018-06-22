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

class getMenuRubriks extends Widget
{

    function run($id=27) // Меню рубрики
    {

        $connection = \Yii::$app->db;

        $model = $connection->createCommand("Select `id`, `name` From core_rubcolumn where `is_vis`=1 AND `id_type`='".$id."' AND `pid`='0' order by `sort`");
        $data = $model->queryAll();
        return $this->render('getMenuRubriks', compact('data'));
    }

}