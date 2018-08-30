<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Joke;
use yii\base\BaseObject;
use yii\data\Pagination;



class JokeController extends AppController
{
//анекдоты
    public function actionIndex()
    {
        $this->layout = 'inside2.php';

        $query = Joke::find()->where(['id_unit' => Joke::IdJokeRecords])->orderBy("date_start DESC");
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        \yii::$app->view->title="Анекдоты от газеты За Изобилие";
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>'Анекдоты от газеты читателей за изобилие']);
        \yii::$app->view->registerMetaTag(['name'=>'keywords', 'content'=>'Анекдоты']);

        return $this->render("index", compact('data','pages'));
    }



}