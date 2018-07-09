<?php

namespace app\controllers;


use yii\web\Controller;
use yii\db\ActiveRecord;
use yii\web\View;


class AppController extends Controller
{


    function getCommentsCount($id,$i=0) // Кол-во комментариев
    {

        $connection = \Yii::$app->db;

        $idcomments=41;
        $model = $connection->createCommand("Select id From core_contents where `is_vis`=1 AND `id_unit`='".$idcomments."' AND `pid`='".$id."' order by `date` DESC");
        $data = $model->queryAll();

        if(count($data)>0&&!empty($data)) {
            foreach($data as $dat) {
                if($dat['id']>0) {
                    $i++;
                    $i=$this->getCommentsCount($dat['id'],$i);
                }
            }
        }
        return $i;
    }
    function getRubricsNameArticle($id){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("Select `name` From core_rubcolumn where `is_vis`=1 AND `id`='".$id."'");
        $data = $model->queryOne();
        return $data['name'];
    }
    function getAutorName($id){
        return "";
    }
    

    function getMetaTagsContents($id){
        $query = \app\models\Menu::find()
                ->select('meta_title, meta_keywords, meta_description')
                ->from('core_contents')
                ->where(['id'=> $id, 'is_vis'=>'1']);
        $data = $query->one();
        $this->title =$data->meta_title;
        $this->registerMetaTag =[ 'name' => 'description', 'content' => $data['meta_description'] ];
        $this->registerMetaTag =[ 'name' => 'keywords', 'content' => $data['meta_keywords'] ] ;
        //$this->metaTags['keywords'] = $data['meta_keywords'];
        return $data;
    }
    
    function getMetaTagsRubcolum($id){
        $query = \app\models\Menu::find()
                ->select('name, text')
                ->from('core_rubcolumn')
                ->where(['id'=> $id, 'is_vis'=>'1']);
        $data = $query->one();
        return $data;
    }
    
}


