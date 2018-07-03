<?php

namespace app\controllers;

use app\controllers\AppController;
use yii\base\BaseObject;
use yii\data\Pagination;
use app\models\Article;


class ArticlesController extends AppController
{
    
    public function actionIndex()
    {
        $this->layout = 'inside2.php';
        $query = Article::find()->where(['id_unit' => $IdArticleRecords=31]);
        $countQuery = clone $query;
        //$pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        //$data = $query->offset($pages->offset)
        //    ->limit($pages->limit)
        //    ->all();

        return $this->render("index", compact('data','pages'));
    }

    public function actionView($id)
    {
        $this->layout = 'inside2.php';
        $query = Article::find()->from("core_contents")->where(['id'=>$id]);
        $data = $query->one();
        $param = array();
        $param['rubrikurl']=$rubrikurl;
        $param['issuesurl']=$issuesurl;
        return $this->render("view",compact('data','param'));
    }
    public function actionRubrics($id)
    {
        $this->layout = 'inside2.php';
        $query = Article::find()->select(' *')->from('core_contents')->where(['rubrics' => $id, 'id_unit'=> '31']);
        $countQuery = clone $query;
        $pagesArticle = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 1]);
        $param = array();
        $param['id']=$id;
        $data = $query->offset($pagesArticle->offset)
            ->limit($pagesArticle->limit)
            ->all();
        return $this->render("rubrics",compact('data','param','pagesArticle'));
    }

}