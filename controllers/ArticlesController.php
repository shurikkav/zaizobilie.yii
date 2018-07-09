<?php

namespace app\controllers;

use app\controllers\AppController;
use yii\base\BaseObject;
use yii\data\Pagination;
use app\models\Article;


class ArticlesController extends AppController
{
    // номер сущности 31 - Статьи
    public $IdArticleRecords=31;
    // номер сущности 25 - Издания газеты
    public $IdTypeIssue=25;
    
    public function actionIndex()
    {
        // показываем все статьи внезависимости от рубрики
        $this->layout = 'inside2.php';
        $query = Article::find()->where(['id_unit' => $this->IdArticleRecords]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        \yii::$app->view->title="Статьи газеты За Изобилие";
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>'Последние статьи за изобилие']);
        \yii::$app->view->registerMetaTag(['name'=>'keywords', 'content'=>'статьи, рубрики']);

        return $this->render("index", compact('data','pages'));
    }

    public function actionView($id)
    {
        // просмотр статьи
        $this->layout = 'inside2.php';
        $query = Article::find()->from("core_contents")->where(['id'=>$id]);
        $data = $query->one();
        \yii::$app->view->title=$data->meta_title;        
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>$data->meta_description]);
        \yii::$app->view->registerMetaTag(['name'=>'keywords', 'content'=>$data->meta_keywords]);
        return $this->render("view",compact('data'));
    }
    public function actionRubrics($id)
    {
        // показываем статьи выбранной рубрики
        $this->layout = 'inside2.php';
        $query = Article::find()
                ->select(' *')
                ->from('core_contents')
                ->where(['rubrics' => $id, 'id_unit'=> $this->IdArticleRecords])
                ->orderBy(['date_start' => SORT_DESC]);
        $countQuery = clone $query;
        $pagesArticle = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $param = array();
        $param['id']=$id;
        $data = $query->offset($pagesArticle->offset)
            ->limit($pagesArticle->limit)
            ->all();
        $meta=AppController::getMetaTagsRubcolum($param['id']);
        \yii::$app->view->title=$meta->name;        
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>$meta->text]);
        
        return $this->render("rubrics",compact('data','param','pagesArticle'));
    }
    public function actionIssues()
    {
        // список номеров газеты по выпускам core_rubcolumn
        $this->layout = 'inside2.php';
        $query = Article::find()->select('*')->from('core_rubcolumn')
                ->where(['id_type'=> $this->IdTypeIssue, 'is_vis'=>1, ])
                ->andWhere(['<>','pid',0])
                ->orderBy(['date'=>SORT_DESC , 'sort'=>SORT_ASC])
                ;
                //var_dump($query);
        $countQuery = clone $query;
        $pagesArticle = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $data = $query->offset($pagesArticle->offset)
            ->limit($pagesArticle->limit)
            ->all();


        \yii::$app->view->title="Архив номеров";        
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>'Архив газетных номеров "За Изобилие"']);


        return $this->render("issues",compact('data','pagesArticle'));
    }

    public function actionIssue($id)
    {
        // список статей в выбранном номере газеты 
        $this->layout = 'inside2.php';
        $query = Article::find()->select(' *')->from('core_contents')->where(['issues' => $id, 'id_unit'=> $this->IdArticleRecords]);
        $countQuery = clone $query;
        $pagesArticle = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $param = array();
        $param['id']=$id;
        $data = $query->offset($pagesArticle->offset)
            ->limit($pagesArticle->limit)
            ->all();

        $meta=AppController::getMetaTagsRubcolum($param['id']);
        \yii::$app->view->title="Выпуск ".$meta->name." газета За Изобилие";        
        \yii::$app->view->registerMetaTag(['name'=>'description', 'content'=>$meta->text]);

        return $this->render("issue",compact('data','param','pagesArticle'));
    }
}