<?php

namespace app\controllers;

use app\controllers\AppController;
use yii\base\BaseObject;
use yii\data\Pagination;
use app\models\Letters;


class LettersController extends AppController
{
    public $CountLettersInBlock=3;

    public function actionIndex()
    {
        $this->layout = 'inside2.php';

        $query = Letters::find()->where(['id_unit' => Letters::IdLettersRecords])->orderBy("date_start DESC");
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 1]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        \yii::$app->view->title="Последние письма газеты За Изобилие";
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>'Последние письма читателей за изобилие']);
        \yii::$app->view->registerMetaTag(['name'=>'keywords', 'content'=>'письма, рубрики']);

        return $this->render("index", compact('data','pages'));
    }

    public function actionView($id)
    {
        $this->layout = 'inside2.php';
        $query = Joke::find()->from("core_contents")->where(['id'=>$id]);
        $data = $query->one();
        $data->view++;
        $data->save();
        $param = array();


        \yii::$app->view->title=$data->meta_title;
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>$data->meta_description]);
        \yii::$app->view->registerMetaTag(['name'=>'keywords', 'content'=>$data->meta_keywords]);

        return $this->render("view",compact('data','param'));
    }
    public function actionBlock()
    {
        $this->layout = 'inside2.php';
        $query = News::find()->from("core_contents")
                ->where(['id'=>$id,'id_unit'=>$this->IdNewsRecords, 'is_main'=>'1', 'is_vis'=>'1'])
                ->orderby('Sort')
                ->limit($this->CountNewsInBlock);
        $data = $query->queryAll();
        return $this->render("block",compact('data'));
    }


}