<?php

namespace app\controllers;

use app\controllers\AppController;
use yii\base\BaseObject;
use yii\data\Pagination;
use app\models\News;


class NewsController extends AppController
{
    public $CountNewsInBlock=3;
    public $IdNewsRecords=32;
    public $rubrikurl="rubrik";
    public $issuesurl="issuesur";
    public function actionIndex()
    {
        $this->layout = 'inside2.php';

        $query = News::find()->where(['id_unit' => $this->IdNewsRecords]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render("index", compact('data','pages'));
    }

    public function actionView()
    {
        $this->layout = 'inside2.php';
        $id=intval($_REQUEST['id']);
        $query = News::find()->from("core_contents")->where(['id'=>$id]);
        $data = $query->one();
        $param = array();
        $param['rubrikurl']=$rubrikurl;
        $param['issuesurl']=$issuesurl;
        return $this->render("view",compact('data','param'));
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
    public function getRublicsName($id=0){
        if($id==0){return "";}
        if(intval($id)>0){
            $data = News::find()->select('name')->from("core_rubcolumn")->where(['id'=>$id]);
            $name = $data->offset()
                ->one();
            return $name;
        }
    }

}