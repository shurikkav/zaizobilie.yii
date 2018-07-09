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
        //выполнить эту команду если возникает ошибка с group 
        //SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
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
        return $this->render("LastArtRub",compact('data'));
    }

}