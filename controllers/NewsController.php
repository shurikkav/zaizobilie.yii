<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.06.2018
 * Time: 10:08
 */

namespace app\controllers;

use app\controllers\AppController;


class NewsController extends AppController
{
    public $CountNewsInBlock=3;
    public $IdNewsRecords=32;
    public function actionIndex()
    {
        $this->layout = 'inside2.php';
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select * From core_contents where id_unit=".$this->IdNewsRecords." and is_vis=1 order by sort");
        $data = $model->queryAll();
        $page=new CPagination(count($data));



        return $this->render("index", compact('data'));
    }

    public function actionView()
    {
        return $this->render("view");
    }
    public function actionBlock()
    {
        $this->layout = 'index.php';
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select * From core_contents where id_unit=".$this->IdNewsRecords." and is_main=1 and is_vis=1 order by sort limit 0,".$this->CountNewsInBlock);
        $data = $model->queryAll();

        return $this->render("block",compact('data'));
    }

}