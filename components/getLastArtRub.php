<?php

namespace app\components;

use yii\base\Widget;
use app\models\Article;
use yii\db;

/* $params подключаем файл с параметрами */
$params = require('../config/params.php');

class getLastArtRub extends Widget
{
    function run() // Меню рубрики
    {
        global $params;
        $query = Article::find()
                ->select('*')
                ->from('core_contents')
                ->where(['id_unit'=> $params['IdArticleRecords']])
                ->andWhere([">","rubrics",0])
                ->orderBy("")
                ->limit($params['LastArtRubCount'])
                ->groupBy("rubrics");
        $data = $query->all();
        //var_dump($query);
        //$data = array();

        
        return $this->render("LastArtRub",compact('data'));
    }

}