<?php

namespace app\controllers;


use yii\web\Controller;


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
    
}


